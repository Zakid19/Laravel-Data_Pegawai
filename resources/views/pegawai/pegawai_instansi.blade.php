@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        @include('layouts.alert')
        <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Pegawai {{ $instansi->nama }}</h6>
                </div>

            <div class="card-body px-0 pt-0 pb-2">
                <div class="col-md-3 px-4 pb-3">
                    <form action="" method="GET">
                        <input type="text" name="search" id="search" class="form-control mb-2" placeholder="Cari Nama ...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>

                <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">No</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">Nama Pegawai</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">Nama Instansi</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">Jabatan</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">Gol</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">Eselon</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($pegawaiInstansi as $index => $i)
                        <tr>
                        <td>
                            <div class="px-3 py-1">
                                <h6 class="mb-0 text-sm">{{ $index + 1 }}</h6>
                            </div>
                        </td>
                        <td>
                            <div class="px-3 py-1">
                                <h6 class="mb-0 text-sm">{{ $i->nama_lengkap }}</h6>
                            </div>
                          </td>
                          <td>
                            <div class="px-3 py-1">
                                <h6 class="mb-0 text-sm">{{ $i->instansi->nama }}</h6>
                            </div>
                          </td>
                          <td>
                            <div class="px-3 py-1">
                                <h6 class="mb-0 text-sm">{{ $i->jabatan }}</h6>
                            </div>
                          </td>
                          <td>
                            <div class="px-3 py-1">
                                <h6 class="mb-0 text-sm">{{ $i->gol }}</h6>
                            </div>
                          </td>
                          <td>
                            <div class="px-3 py-1">
                                <h6 class="mb-0 text-sm">{{ $i->eselon }}</h6>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pegawaiInstansi->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
