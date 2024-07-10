@extends('layouts.app')
@section('title', 'BOOKS EDIT')
@section('content')
    <div class="table-responsive">
        <div class="form-group mb-3">
            <div class="chart-container" style="min-height: 100px">
                <form class="justify-content-center" action="{{ route('buku.update', $edit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="">Books name</label>
                        <input type="text" name="nama_buku" placeholder="Input your books name" class="form-control"
                            value="{{ $edit->nama_buku }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Publisher</label>
                        <input type="text" name="penerbit" placeholder="Input your publisher" class="form-control"
                            value="{{ $edit->penerbit }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Quantity</label>
                        <input type="number" name="qty" placeholder="Input your quantity" class="form-control"
                            value="{{ $edit->qty }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Description</label>
                        <input type="text" name="deskripsi" placeholder="Input your description" class="form-control"
                            value="{{ $edit->deskripsi }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Writers</label>
                        <input type="text" name="penulis" placeholder="Input your writers" class="form-control"
                            value="{{ $edit->penulis }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Genre</label>
                        <input type="text" name="genre" placeholder="Input your genre" class="form-control"
                            value="{{ $edit->genre }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn bg-primary border border-dark text-white">Save</button>
                        <a href="{{ url()->previous() }}" class="btn bg-danger border border-dark text-white">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
