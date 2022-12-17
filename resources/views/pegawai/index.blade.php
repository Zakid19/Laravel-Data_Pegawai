@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        @include('layouts.alert')
        <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Daftar Pegawai</h6>
                <a class="btn btn-primary shadow-sm" href="{{ route('create') }}">Add</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="col-md-3 px-4 pb-3">
                    <form action="{{ route('index') }}" method="GET">
                        <input type="text" name="search" id="search" class="form-control mb-2" placeholder="Search here...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>

                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">No</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Nip</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Nama</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Image</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Tempat Lahir</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Alamat</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Tgl Lahir</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Kelamin</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Gol</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Eselon</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Jabatan</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Tempat Tugas</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Agama</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Unit Kerja</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No Telepon</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder">Npwp</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawais as $index => $pegawai)
                            <tr>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $index + 1 }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->nip }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->nama_lengkap }}</h6>
                                </div>
                            </td>
                            <td>
                                <img src="{{ Storage::url($pegawai->image) }}" style="width: 150px; height:80px;"  class="img-fluid rounded" alt="">
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->ttl }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->alamat }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->tgll }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->jenis_kelamin }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-center">{{ $pegawai->gol }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-center">{{ $pegawai->eselon }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->jabatan }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->tempat_tugas}}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->agama }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->instansi->nama}}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->no_hp }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="px-3 py-1">
                                    <h6 class="mb-0 text-sm">{{ $pegawai->npwp }}</h6>
                                </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a class="btn btn-primary btn-xs shadow-sm" href="{{ route('pegawai.edit', $pegawai) }}">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Edit</a>
                                <a class="btn btn-danger btn-xs shadow-sm" href="{{ route('pegawai.delete', $pegawai) }}">
                                    <i class="fa fa-trash-o"></i>
                                    Delete
                                </a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="d-flex justify-content-end PR-2">
                    <a class="btn btn-success btn-xs shadow-sm" href="{{ route('createPdf') }}">Export PDF</a>
                </div>
        </div>
    </div>
</div>
@endsection
