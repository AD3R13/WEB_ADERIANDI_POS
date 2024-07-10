@extends('layouts.app')
@section('title', 'Ubah Barang')
@section('content')
    <form action="{{ route('barang.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Kategori</label>
            <select class="form-control" id="" name="id_kategori">
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $cat)
                    <option {{ $cat->id == $edit->id_kategori ? 'selected' : '' }} value="{{ $cat->id }}">
                        {{ $cat->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="">Nama</label>
            <input value="{{ $edit->nama_barang }}" type="text" class="form-control" id="name" name="nama_barang"
                placeholder="Masukkan nama kategori">
        </div>
        <div class="form-group mb-3">
            <label for="">Satuan</label>
            <input value="{{ $edit->satuan }}" type="text" class="form-control" id="name" name="satuan"
                placeholder="Masukkan nama kategori">
        </div>
        <div class="form-group mb-3">
            <label for="">Qty</label>
            <input value="{{ $edit->qty }}" type="text" class="form-control" id="name" name="qty"
                placeholder="Masukkan nama kategori">
        </div>
        <div class="form-group mb-3">
            <label for="">Harga</label>
            <input value="{{ $edit->harga }}" type="text" class="form-control" id="name" name="harga"
                placeholder="Masukkan nama kategori">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
            <input type="reset" class="btn btn-danger" value="Batal">
            <a href="{{ url()->previous() }}" class="text-info">Kembali</a>
        </div>
    </form>
@endsection
