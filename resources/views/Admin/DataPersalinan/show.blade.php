@extends('Admin.Layouts.app', ['title' => 'Data Persalinan'])

@section('content')
<div class="card p-4">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nama" class="form-label">Nomor Registrasi</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->no_registrasi }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->nama }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Umur</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->umur }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Hari</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->hari }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Tanggal Lahir</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->ttl }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Pukul</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->pukul }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nama" class="form-label">Jenis Kelamin</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->jk }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">BB/PB</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->bb_pb }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Paritas</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->paritas }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Pekerjaan</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->pekerjaan }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Alamat</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->alamat }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Keterangan</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $persalinan->keterangan }}">
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ url('/persalinan') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection