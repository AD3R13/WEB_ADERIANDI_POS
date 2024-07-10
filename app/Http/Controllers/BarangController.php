<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kategori_barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::get();
        return view('barang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = kategori_barang::orderBy('id', 'desc')->get();
        return view('barang.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create($request->all());
        toast('Data berhasil di tambah', 'success');
        return redirect()->to('barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Barang::find($id);
        $categories = kategori_barang::orderBy('id', 'desc')->get();
        return view('barang.edit', compact('edit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Barang::where('id', $id)->update([
            'nama_barang' => $request->nama_barang,
            'id_kategori' => $request->id_kategori,
            'qty' => $request->qty,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
        ]);
        toast('Data berhasil di update', 'success');
        return redirect()->to('barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::where('id', $id)->delete();
        toast('Data berhasil di hapus', 'success');
        return redirect()->to('barang');
    }
}
