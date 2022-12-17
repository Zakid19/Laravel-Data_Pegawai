@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Add Pegawai</p>
                <button class="btn btn-primary btn-sm ms-auto">Settings</button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
            <form action="{{ route('instansi.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama" class="form-control-label">Nama</label>
                            <input class="form-control" type="text" id="nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-control-label">Email</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tlp" class="form-control-label">No Telepon</label>
                            <input class="form-control" type="text" id="tlp" name="tlp" value="{{ old('tlp') }}">
                            @error('tlp')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat" class="form-control-label">Alamat</label>
                            <textarea class="form-control" type="text" id="alamat" name="alamat" value="{{ old('alamat') }}">{{ old('nama') }}</textarea>
                            @error('alamat')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary shadow-sm">Simpan</button>
                            <a class="btn btn-light shadow-sm" href="{{ route('instansi') }}">Batal</a>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
