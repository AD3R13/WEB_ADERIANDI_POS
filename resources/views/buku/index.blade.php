@extends('layouts.app')
@section('title', 'BOOKS DATA')
@section('content')
    @csrf
    <div class="table-responsive">
        <div class="card-body">
            <div class="chart-container" style="min-height: 300px">
                <div class="form-group mb-3">
                    <a href="{{ route('buku.create') }}" class="btn btn-success btn-round"><i class="fas fa-plus"></i>
                        Add</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Books name</th>
                            <th>Publisher</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Writers</th>
                            <th>Genre</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->nama_buku }}</td>
                                <td>{{ $user->penerbit }}</td>
                                <td>{{ $user->qty }}</td>
                                <td>{{ $user->deskripsi }}</td>
                                <td>{{ $user->penulis }}</td>
                                <td>{{ $user->genre }}</td>
                                <td>
                                    <a href="{{ route('buku.edit', $user->id) }}" class="btn btn-xs bg-primary">
                                        <i class="fas fa-edit"> Edit</i>
                                    </a>
                                    <form action="{{ route('buku.destroy', $user->id) }}" method="POST" class="d-inline">
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
        </div>
        <div id="myChartLegend"></div>
    </div>
@endsection
