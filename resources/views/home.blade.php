@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mx-auto d-flex mb-3">
                <img src="{{ asset('images/logo.png') }}" alt="logo" width="100px" class="m-auto ">
            </div>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table">
                        <a href="{{ route('tambah') }}" class="btn btn-primary mb-3">Tambah</a>
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Golongan</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawais as $pegawai)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $pegawai->nama }}</td>
                                <td>{{ $pegawai->nip }}</td>
                                <td>{{ $pegawai->golongan }}</td>
                                <td>{{ $pegawai->jabatan }}</td>
                                <td>{{ $pegawai->nomor_hp }}</td>
                                <td>{{ $pegawai->email }}</td>
                                <td>
                                    <a href="{{ route('edit', $pegawai->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('delete', $pegawai->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
