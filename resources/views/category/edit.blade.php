@extends('layouts.app')
@section('title', ' Ubah Kategori')
@section('content')
    <form action="{{ route('category.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Nama Kategori</label>
            <input value="{{ $edit->name }}" type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                placeholder="Masukkan nama kategori">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
            <input type="reset" class="btn btn-danger" value="Batal">
            <a href="{{ url()->previous() }}" class="text-info">Kembali</a>
        </div>
    </form>
@endsection
