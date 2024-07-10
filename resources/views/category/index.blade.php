@extends('layouts.app')
@section('title', 'DATA KATEGORI')
@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('category.create') }}" class="btn btn-success"><i class="fas fa-plus-square"></i> Add</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama_kategori }}</td>
                        <td>
                            <a href="{{ route('category.edit', $d->id) }}" class="btn btn-xs bg-primary">
                                <i class="fas fa-edit"> Edit</i>
                            </a>
                            <form action="{{ route('category.destroy', $d->id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-xs btn-danger show_confirm" type="submit">
                                    <i class="fas fa-trash"> Delete</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
