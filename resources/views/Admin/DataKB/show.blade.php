@extends('Admin.Layouts.app', ['title' => 'Keluarga Berencana'])

@section('content')
<div class="card p-4">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->nama }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Baru</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->baru }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Tanggal</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->tanggal }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Umur</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->umur }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Alamat</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->alamat }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Jumlah Anak</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->jumlah_anak }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nama" class="form-label">Metode KB</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->metode_kb }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Lama</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->lama }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Tanggal Kembali</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->tanggal_kembali }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">TD/BB</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->td_bb }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Keterangan</label>
                <input type="text" disabled class="form-control" id="nama" value="{{ $kb->keterangan }}">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ url('/kb') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>
@endsection