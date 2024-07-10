<?php

namespace App\Http\Controllers;

use App\Models\kategori_barang;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kategori_barang::orderBy('id', 'desc')->get();
        return view('category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        kategori_barang::create($request->all());
        toast('Data berhasil di tambah', 'success');
        return redirect()->to('category');
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
        $edit = kategori_barang::find($id);
        return view('category.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        kategori_barang::where('id', $id)->update([
            'nama_kategori' => $request->nama_kategori,
        ]);
        toast('Data berhasil di update', 'success');
        return redirect()->to('category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kategori_barang::where('id', $id)->delete();
        toast('Data berhasil di hapus', 'success');
        return redirect()->to('category');
    }
}
