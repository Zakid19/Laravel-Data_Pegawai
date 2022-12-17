@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        @include('layouts.alert')
        <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <h6>Daftar Instansi</h6>
                    <a class="btn btn-primary shadow-sm" href="{{ route('instansi.create') }}">Add</a>
                </div>

            <div class="card-body px-0 pt-0 pb-2">
                <div class="col-md-3 px-4 pb-3">
                    <form action="{{ route('instansi') }}" method="GET">
                        <input type="text" name="search" id="search" class="form-control mb-2" placeholder="Search here...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>

                <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">No</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">Nama</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">Alamat</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">Email</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">No Telp</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($instansis as $index => $instansi)
                        <tr>
                        <td>
                            <div class="px-3 py-1">
                                <h6 class="mb-0 text-sm">{{ $index + 1 }}</h6>
                            </div>
                            </td>
                          <td>
                            <div class="px-3 py-1">
                                <h6 class="mb-0 text-sm">{{ $instansi->nama }}</h6>
                            </div>
                          </td>
                          <td class="px-3 py-1">
                            <h6 class="mb-0 text-sm">{{ $instansi->alamat }}</h6>
                          </td>
                          <td>
                            <div class="px-3 py-1">
                                <h6 class="mb-0 text-sm">{{ $instansi->email }}</h6>
                            </div>
                          </td>
                          <td>
                            <div class="px-3 py-1">
                                <h6 class="mb-0 text-sm">{{ $instansi->tlp }}</h6>
                            </div>
                          </td>
                          <td class="align-middle text-center text-sm d-inline">
                            <a class="btn btn-success btn-xs shadow-sm" href="{{ route('pegawai.instansi', $instansi) }}">
                                <i class="fa fa-pencil-square-o"></i>
                                Pegawai</a>
                            <a class="btn btn-primary btn-xs shadow-sm" href="{{ route('instansi.edit', $instansi) }}">
                                <i class="fa fa-pencil-square-o"></i>
                                Edit</a>
                            <a class="btn btn-danger btn-xs shadow-sm" href="{{ route('instansi.delete', $instansi) }}">
                                <i class="fa fa-trash-o"></i>
                                Delete
                            </a>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $instansis->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
