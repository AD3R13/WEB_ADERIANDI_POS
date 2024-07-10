<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use PHPUnit\TextUI\Configuration\Php;
use RealRashid\SweetAlert\Facades\Alert;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Penjualan::with('anggota')->get();
        // $user = Anggota::get();
        // $user = Penjualan::get();
        return view('penjualan.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kode_transaksi = Penjualan::orderBy('id', 'desc')->first();
        if (isset($kode_transaksi)) {
            $urutan = $kode_transaksi->id;
        } else {
            $urutan = 0;
        }
        $huruf = "TR";
        $urutan++;
        date_default_timezone_set("Asia/Jakarta");
        $kode_transaksi = $huruf . date('-dmY-H:i-') . sprintf('%03s', $urutan);
        $data = User::orderBy('id', 'desc')->get();

        return view('penjualan.create', compact('data', 'kode_transaksi'));
    }
    public function store(Request $request)
    {
        if ($request->id_buku) {
            $Penjualan = Penjualan::create([
                'id_anggota' => $request->id_anggota,
                'no_transaksi' => $request->no_transaksi,
            ]);
            foreach ($request->id_buku as $index => $id_buku) {
                DetailPenjualan::create([
                    'id_Penjualan' => $Penjualan->id,
                    'id_buku' => $id_buku,
                    'tanggal_pinjam' => $request->tanggal_pinjam[$index],
                    'tanggal_kembali' => $request->tanggal_kembali[$index],
                    'keterangan' => $request->keterangan,
                ]);
            };
            Alert::success('Added borrower data', 'Success Message!');
            return redirect()->to('penjualan')->with('success', 'Successfully added borrower data');
        } else {
            alert()->info('Clicked to (+ Add)! <=', 'Added borrower data');
            return redirect()->back()->with('error', 'Please select a book');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function edit(string $id)
    {
        $edit = Penjualan::find($id);
        return view('penjualan.edit', compact('edit'));
    }
    public function update(Request $request, string $id)
    {
        Penjualan::where('id', $id)->update([
            "id_anggota" => $request->id_anggota,
            "no_transaksi" => $request->no_transaksi
        ]);
        Alert::info('Data telah diubah', 'Success Message!');
        return redirect()->to('penjualan')->with('info', 'Berhasil diubah');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Penjualan::where('id', $id)->delete();
        toast('Data berhasil di hapus', 'success');
        return redirect()->to('penjualan')->with('success', 'Berhasil dihapus');
    }
}
