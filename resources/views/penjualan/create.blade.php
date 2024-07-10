@extends('layouts.app')
@section('title', 'TRANSACTION ADD')
@section('content')
    <div class="table-responsive">
        <div class="card-body">
            <div class="chart-container" style="min-height: 300px">
                <form class="justify-content-center" action="{{ route('penjualan.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Cashier name</label>
                        <div>
                            <div align="left" class="col-md-2">
                                <input type="text" readonly value="{{ $nama_hari }}, {{ $kodes }}"
                                    class="form-control form-control-sm" name="no_transaksi" style="padding-right: 5px;">
                            </div>
                            <br>
                            <div class="col-md-3">
                                <input type="text" readonly value="{{ Auth::user()->nama_lengkap }}" class="form-control"
                                    name="no_transaksi">
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
                                        <th>Nama Barang</th>
                                        <th>Quantity</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>
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
