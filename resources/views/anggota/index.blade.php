@extends('layouts.app')
@section('title', 'MEMBERS DATA')
@section('content')
    @csrf
    <div class="table-responsive">
        <div class="card-body">
            <div class="chart-container" style="min-height: 100px">
                <div class="form-group mb-3">
                    <a href="{{ route('anggota.create') }}" class="btn btn-success btn-round"><i class="fas fa-plus"></i>
                        Add</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email or Gmail</th>
                            <th>No Telephone</th>
                            <th>Usertype</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->nama_anggota }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->no_tlp }}</td>
                                <td>{{ $user->level->nama_level }}</td>
                                <td>
                                    <a href="{{ route('anggota.edit', $user->id) }}" class="btn btn-xs bg-primary">
                                        <i class="fas fa-edit"> Edit</i>
                                    </a>
                                    <form action="{{ route('anggota.destroy', $user->id) }}" method="POST"
                                        class="d-inline">
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
    </div>
    <div id="myChartLegend"></div>
@endsection
