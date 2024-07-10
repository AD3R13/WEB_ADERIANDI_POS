@extends('layouts.app')
@section('title', 'BORROWER DETAIL')
@section('content')
    @csrf
    <div class="table-responsive">
        <div align="left" class="mb-3">
            <a href="#" class="btn btn-success btn-round"><i class="fas fa-plus"></i> Print</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Member Name</th>
                    <th>Book Name</th>
                    <th>Date of Loan</th>
                    <th>Date of Return</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->anggota->nama_anggota }}</td>
                        <td>{{ $item->buku->nama_buku }}</td>
                        <td>{{ $item->tanggal_pinjam }}</td>
                        <td>{{ $item->tanggal_pengembalian }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            {{-- <a href="{{ route('peminjam.edit', $user->id) }}" class="btn btn-xs bg-primary">
                                <i class="fas fa-edit"> Edit</i>
                            </a>
                            <form action="{{ route('peminjam.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-xs btn-danger show_confirm" type="submit">
                                    <i class="fas fa-trash"> Delete</i>
                                </button>
                            </form>
                            <a href="" class="btn btn-xs bg-light border border-dark text-dark">
                                <i class="fas fa-file-alt"></i> Detail
                            </a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="myChartLegend"></div>
@endsection
