@extends('layouts.app')
@section('title', 'DATA BARANG')
@section('content')
    <div class="table-responsive">
        @if (Auth::check() && Auth::user()->id_level == 1)
            <div align="right" class="mb-3">
                <a href="{{ route('barang.create') }}" class="btn btn-success"><i class="fas fa-plus-square"></i> Add</a>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Satuan</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    @if (Auth::check() && Auth::user()->id_level == 1)
                        <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->kategori_barang->nama_kategori }}</td>
                        <td>{{ $d->nama_barang }}</td>
                        <td>{{ $d->satuan }}</td>
                        <td>{{ $d->qty }}</td>
                        <td>Rp {{ number_format($d->harga) }}</td>
                        @if (Auth::check() && Auth::user()->id_level == 1)
                            <td>
                                <a href="{{ route('barang.edit', $d->id) }}" class="btn btn-xs bg-primary">
                                    <i class="fas fa-edit"> Edit</i>
                                </a>
                                <form action="{{ route('barang.destroy', $d->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-xs btn-danger show_confirm" type="submit">
                                        <i class="fas fa-trash"> Delete</i>
                                    </button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
