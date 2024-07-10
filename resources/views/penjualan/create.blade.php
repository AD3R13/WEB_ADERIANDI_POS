@extends('layouts.app')
@section('title', 'TRANSACTION ADD')
@section('content')
    <div class="table-responsive">
        <div class="card-body">
            <div class="chart-container" style="min-height: 300px">
                <form class="justify-content-center" action="{{ route('penjualan.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Member name</label>
                        <div class="row">
                            <div class="col-md-3">
                                <select id="id_anggota" class="form-control" name="id_anggota" required>
                                    <option value="" hidden>Choose a member</option>
                                    @foreach ($data as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div align="left" class="col-md-3">
                                <a href="{{ route('pengguna.create') }}" type="button"
                                    class="btn btn-success btn-sm btn-round"><b><i class="fas fa-plus">
                                            New Member</i></b></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">No. Transaction</label>
                                <input type="text" readonly value="{{ $kode_transaksi }}" class="form-control"
                                    name="no_transaksi">
                            </div>
                        </div>
                        <div class="table-transaction">
                            <div align="right" class="mb-3">
                                <a type="button" class="btn btn-success btn-sm btn-add" required><i class="fas fa-plus">
                                        Add</i></a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Book Name</th>
                                        <th>Loan of Date</th>
                                        <th>Loan of Return</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
                        <input type="reset" class="btn btn-danger" value="Cancel">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
