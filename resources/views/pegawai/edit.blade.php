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
                <form action="{{ route('pegawai.update', $pegawai) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nip" class="form-control-label">Nip</label>
                            <input class="form-control" type="text" id="nip" name="nip" value="{{ old('nip', $pegawai->nip) }}">
                            @error('nip')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formFile" class="form-label">image</label>
                            <div class="div mb-2">
                                <img src="{{ Storage::url($pegawai->image) }}" alt="" class="img-fluid rounded" width="25%">
                            </div>
                            <input class="form-control" name="image" type="file" id="image">
                            @error('image')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama" class="form-control-label">Nama</label>
                            <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $pegawai->nama_lengkap) }}">
                            @error('nama_lengkap')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_outlet" class="form-control-label">Tempat Tanggal Lahir</label>
                            <input class="form-control" type="text" id="ttl" name="ttl" value="{{ old('ttl', $pegawai->ttl) }}">
                            @error('ttl')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="no_tlp" class="form-control-label">No Telepon</label>
                            <input class="form-control" type="text" id="no_hp" name="no_hp" value="{{ old('no_hp', $pegawai->no_hp) }}">
                            @error('no_hp')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat" class="form-control-label">Alamat</label>
                            <textarea class="form-control" type="text" id="alamat" name="alamat" value="">{{ $pegawai->alamat }}</textarea>
                            @error('alamat')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tgll" class="form-control-label">Tanggal Lahir</label>
                            <input class="form-control" type="date" id="tgll" name="tgll" value="{{ old('tgll', $pegawai->tgll) }}">
                            @error('tgll')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>
                            <div class="col-sm-4">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" {{$pegawai->jenis_kelamin == 'Laki-Laki'? 'checked' : ''}}>
                                    Laki - laki
                                  <i class="input-helper"></i></label>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" {{$pegawai->jenis_kelamin == 'Perempuan'? 'checked' : ''}}>
                                    Perempuan
                                  <i class="input-helper"></i></label>
                                </div>
                              </div>
                            {{-- <input class="form-check" type="radio" id="jenis_kelamin" name="jenis_kelamin" value=""> --}}
                            @error('jenis_kelamin')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_outlet" class="form-control-label">Gol</label>
                            <input class="form-control" type="text" id="gol" name="gol" value="{{ old('gol', $pegawai->gol) }}">
                            @error('gol')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_outlet" class="form-control-label">Eselon</label>
                            <input class="form-control" type="text" id="eselon" name="eselon" value="{{ old('eselon', $pegawai->eselon) }}">
                            @error('eselon')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_outlet" class="form-control-label">Jabatan</label>
                            <input class="form-control" type="text" id="jabatan" name="jabatan" value="{{ old('jabatan', $pegawai->jabatan) }}">
                            @error('jabatan')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_outlet" class="form-control-label">Tempat Tugas</label>
                            <input class="form-control" type="text" id="tempat_tugas" name="tempat_tugas" value="{{ old('tempat_tugas', $pegawai->tempat_tugas) }}">
                            @error('tempat_tugas')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_outlet" class="form-control-label">Agama</label>
                            <input class="form-control" type="text" id="agama" name="agama" value="{{ old('agama', $pegawai->agama) }}">
                            @error('agama')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="instansi" class="form-label">Unit Kerja</label>
                            <select class="form-select select2" name="instansi" id="instansi" multiple>
                                @foreach($instansis as $instansi)
                                    <option {{ $instansi->id == $pegawai->instansi_id ? 'selected' : ''  }} value="{{ $instansi->id }}">{{ $instansi->nama }}</option>
                                @endforeach
                              </select>
                            @error('instansis')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_outlet" class="form-control-label">Npwp</label>
                            <input class="form-control" type="text" id="npwp" name="npwp" value="{{ old('npwp', $pegawai->npwp) }}">
                            @error('npwp')
                                <div class="mt-2 mb-3 text-xs text-danger">{{ $message }}!</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary shadow-sm">Update</button>
                            <a class="btn btn-light shadow-sm" href="{{ route('index') }}">Batal</a>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
