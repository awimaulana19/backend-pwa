@extends('Admin.Layouts.app', ['title' => 'Kunjungan Ulang'])

@section('content')
<div class="card p-4">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <div class="mb-3">
                    <label for="nama" class="form-label">Tanggal Periksa</label>
                    <input type="text" disabled class="form-control" id="nama" value="{{ $kunjungan->tanggal }}">
                </div>
                <label for="nama" class="form-label">Nama</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kunjungan->nama }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Umur</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kunjungan->umur }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Alamat</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kunjungan->alamat }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Paritas</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kunjungan->paritas }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nama" class="form-label">TD</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kunjungan->td }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">BB</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kunjungan->bb }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Umur Kelahiran</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kunjungan->umur_kelahiran }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Keterangan</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kunjungan->keterangan }}">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ Auth::user()->roles != 'admin' ? url('kunjungan-ulang-kehamilan-bidan') : route('kunjungan-ulang-kehamilan.index') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>
@endsection
