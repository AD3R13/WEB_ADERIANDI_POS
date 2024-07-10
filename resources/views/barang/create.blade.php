@extends('layouts.app')
@section('title', ' TAMBAH BARANG')
@section('content')
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">Kategori</label>
            <select class="form-control" id="" name="id_kategori">
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="">Nama Obat</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama obat">
        </div>
        <div class="form-group mb-3">
            <label for="">Satuan</label>
            <input type="text" class="form-control" name="satuan" placeholder="Masukkan nama obat">
        </div>
        <div class="form-group mb-3">
            <label for="">Qty</label>
            <input type="number" class="form-control" name="qty" placeholder="Masukkan Qty">
        </div>
        <div class="form-group mb-3">
            <label for="">Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="Masukkan harga obat">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
            <input type="reset" class="btn btn-danger" value="Batal">
            <a href="{{ url()->previous() }}" class="text-info">Kembali</a>
        </div>
    </form>
@endsection
