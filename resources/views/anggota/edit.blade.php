@extends('layouts.app')
@section('title', 'MEMBERS EDIT')
@section('content')
    <div class="table-responsive">
        <div class="form-group mb-3">
            <div class="chart-container" style="min-height: 300px">
                <form class="justify-content-center" action="{{ route('anggota.update', $edit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="">Members name</label>
                        <input type="text" name="nama_anggota" placeholder="Input your name" class="form-control"
                            value="{{ $edit->nama_anggota }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email or Gmail</label>
                        <input type="email" name="email" placeholder="Input your email or gmail" class="form-control"
                            value="{{ $edit->email }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">No Telephone</label>
                        <input type="number" name="no_tlp" placeholder="Input your number" class="form-control"
                            value="{{ $edit->no_tlp }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Usertype</label>
                        <select class="form-control" name="id_level" id="id_level" class="form-select"
                            aria-label="Default select example" required>
                            <option selected hidden>Choose a usertype</option>
                            @foreach ($level as $data)
                                @if ($data->nama_level == 'User')
                                    <option value="{{ $data->id }}" required>{{ $data->nama_level }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
