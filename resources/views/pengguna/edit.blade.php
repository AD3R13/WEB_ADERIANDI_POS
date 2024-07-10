@extends('layouts.app')
@section('title', 'USERS EDIT')
@section('content')
    <div class="table-responsive">
        <div class="form-group mb-3">
            <div class="chart-container" style="min-height: 300px">
                <form class="justify-content-center" action="{{ route('pengguna.update', $edit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="">Your name</label>
                        <input type="text" name="nama_lengkap" placeholder="Input your name" class="form-control" required
                            value="{{ $edit->nama_lengkap }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email or Gmail</label>
                        <input type="text" name="email" placeholder="Input your email or gmail" class="form-control"
                            required value="{{ $edit->email }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="********" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Re-Password</label>
                        <input type="password" name="password" placeholder="********" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Usertype</label>
                        <select class="form-control" name="id_level" id="id_level" class="form-select"
                            aria-label="Default select example">
                            <option selected hidden>Choose a usertype</option>
                            @foreach ($level as $du)
                                <option value="{{ $du->id }}" required>{{ $du->nama_level }}
                                </option>
                            @endforeach
                        </select>
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
