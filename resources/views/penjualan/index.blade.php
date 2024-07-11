@extends('layouts.app')
@section('title', 'TRANSACTION DATA')
@section('content')
    @csrf
    <div class="table-responsive">
        <div class="card-body">
            <div class="chart-container" style="min-height: 100px">
                <div class="form-group mb-3">
                    @if (Auth::check() && Auth::user()->id_level == 1)
                        <a href="{{ route('penjualan.create') }}" class="btn btn-success btn-round"><i class="fas fa-plus"></i>
                            Add</a>
                    @endif
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Cashier Name</th>
                            <th>Transaksi pada</th>
                            <th>No Transaction</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->user->nama_lengkap }}</td>
                                <td>{{ date('l, d M Y', strtotime($user->tanggal_transaksi)) }}</td>
                                <td>{{ $user->kode_transaksi }}</td>
                                <td>
                                    <a href="{{ route('penjualan.edit', $user->id) }}" class="btn btn-xs bg-primary">
                                        <i class="fas fa-edit"> Edit</i>
                                    </a>
                                    <form action="{{ route('penjualan.destroy', $user->id) }}" method="POST"
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
