@extends('layouts.app')
@section('title', 'LEVELS ADD')
@section('content')
    <div class="table-responsive">
        <div class="form-group mb-3">
            <div class="chart-container" style="min-height: 300px">
                <form class="justify-content-center" action="{{ route('level.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Usertype</label>
                        <input type="text" name="nama_level" placeholder="Input your usertype" class="form-control"
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
