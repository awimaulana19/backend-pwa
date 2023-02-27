@extends('Admin.Layouts.app', ['title' => 'Pemeriksaan Awal'])

@section('content')
<div class="card p-4">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nama" class="form-label">Tanggal Periksa</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $periksa->tanggal }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $periksa->nama }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Umur</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $periksa->umur }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Parintas</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $periksa->paritas }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Alamat</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $periksa->alamat }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nama" class="form-label">Anak Perkecil</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $periksa->anak_perkecil }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">TD/BB</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $periksa->td_bb }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Hasil Pemeriksaan</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $periksa->hasil_pemeriksaan}}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Keterangan</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $periksa->keterangan }}">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ Auth::user()->roles != 'admin' ? url('pemeriksaan-awal-kehamilan-bidan') : route('pemeriksaan-awal-kehamilan.index') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>
@endsection
