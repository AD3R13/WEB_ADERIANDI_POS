@extends('layouts.app')
@section('title', 'TRANSACTION DATA')
@section('content')
    @csrf
    <div class="table-responsive">
        <div class="card-body">
            <div class="chart-container" style="min-height: 100px">
                <div class="form-group mb-3">
                    <a href="{{ route('penjualan.create') }}" class="btn btn-success btn-round"><i class="fas fa-plus"></i>
                        Add</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Member Name</th>
                            <th>No Transaction</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->anggota->nama_anggota }}</td>
                                <td>{{ $user->no_transaksi }}</td>
                                <td>
                                    <a href="{{ route('peminjam.edit', $user->id) }}" class="btn btn-xs bg-primary">
                                        <i class="fas fa-edit"> Edit</i>
                                    </a>
                                    <form action="{{ route('peminjam.destroy', $user->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-xs btn-danger show_confirm" type="submit">
                                            <i class="fas fa-trash-alt"> Delete</i>
                                        </button>
                                    </form>
                                    <a href="" class="btn btn-xs bg-light border border-dark text-dark">
                                        <i class="fas fa-file-alt"></i> Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
