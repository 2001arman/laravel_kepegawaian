@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Pegawai</div>

                <div class="card-body">
                    <form action="{{ route('update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $pegawai->id }}">
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="nama" name="nama" aria-describedby="textHelp" value="{{ $pegawai->nama }}"  required>
                        </div>

                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" aria-describedby="textHelp" value="{{ $pegawai->nip }}" required>
                        </div>

                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" aria-describedby="textHelp" value="{{ $pegawai->jabatan }}" required>
                        </div>

                        <div class="form-group">
                            <label for="golongan">Golongan</label>
                            <input type="text" class="form-control" id="golongan" name="golongan" aria-describedby="textHelp" value="{{ $pegawai->golongan }}" required>
                        </div>

                        <div class="form-group">
                            <label for="nomor hp">Nomor HP</label>
                            <input type="text" class="form-control" id="nomor hp" name="nomor" aria-describedby="textHelp" value="{{ $pegawai->nomor_hp }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" value="{{ $pegawai->email }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
