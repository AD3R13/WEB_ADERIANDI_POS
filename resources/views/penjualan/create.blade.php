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
                                <input readonly value="{{ $kodes }}" class="form-control form-control-sm"
                                    style="padding-right: 5px;">
                                <input hidden readonly value="{{ date('Y-m-d') }}" class="form-control form-control-sm"
                                    name="tanggal_transaksi" style="padding-right: 5px;">
                            </div>
                            <br>
                            <div class="col-md-3">
                                <input type="text" readonly value="{{ Auth::user()->nama_lengkap }}"
                                    class="form-control">
                                <input type="text" readonly value="{{ Auth::user()->id }}" hidden class="form-control"
                                    name="id_user">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">No. Transaction</label>
                                <input type="text" readonly value="{{ $kode_transaksi }}" class="form-control"
                                    name="kode_transaksi">
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
                        <div class="row">
                            <div class="col-md-4">
                                <label for="bayar">Nominal Bayar</label>
                                <input type="number" id="bayar" class="form-control" oninput="calculateChange()">
                            </div>
                            <div align="left" class="col-md-4">
                                <label for="kembalian">Kembalian</label>
                                <input type="text" id="kembalian" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="total">Total Harga</label>
                                <input name="total_harga" type="text" id="total" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="hidden" name="nominal_bayar" id="hidden_nominal_bayar">
                        <input type="hidden" name="kembalian" id="hidden_kembalian">
                        <input type="submit" class="btn btn-primary" value="Save" onclick="setHiddenValues()">
                        <input type="reset" class="btn btn-danger" value="Cancel">
                        <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
                    </div>
            </div>
            </form>
        </div>
    </div>
@endsection
