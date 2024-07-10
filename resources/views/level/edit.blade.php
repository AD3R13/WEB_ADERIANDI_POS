@extends('layouts.app')
@section('title', 'LEVELS EDIT')
@section('content')
    <div class="table-responsive">
        <div class="form-group mb-3">
            <div class="chart-container" style="min-height: 300px">
                <form class="justify-content-center" action="{{ route('level.update', $edit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="">Usertype</label>
                        <input type="text" name="nama_level" value="{{ $edit->nama_level }}" class="form-control"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn bg-primary border border-dark text-white">Save</button>
                        <a href="{{ url()->previous() }}" class="btn bg-danger border border-dark text-white">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
