@extends('layouts.app')
@section('title', 'LEVELS DATA')
@section('content')
    @csrf
    <div class="table-responsive">
        <div class="card-body">
            <div class="chart-container" style="min-height: 200px">
                <div class="form-group mb-3">
                    <a href="{{ route('level.create') }}" class="btn btn-success btn-round"><i class="fas fa-plus"></i> Add</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Usertype</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_level }}</td>
                                <td>
                                    <a href="{{ route('level.edit', $data->id) }}" class="btn btn-xs bg-primary">
                                        <i class="fas fa-edit"> Edit</i>
                                    </a>
                                    <form action="{{ route('level.destroy', $data->id) }}" method="POST" class="d-inline">
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
