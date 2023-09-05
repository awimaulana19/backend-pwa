@extends('Admin.Layouts.app', ['title' => 'Riwayat Pendaftaran'])

@section('content')
    <div class="card p-4">
        <form action="{{ Auth::user()->roles != 'admin' ?  url('bidan-periksa-pemeriksaan-awal-kehamilan') : url('periksa-pemeriksaan-awal-kehamilan') }}" method="POST">
            @csrf
            <input type="hidden" name="pendaftaran_id" value="{{ $pendaftaran->id }}">
            <input type="hidden" name="antrian" value="{{ $pendaftaran->antrian }}">
            <input type="hidden" name="user_id" value="{{ $pendaftaran->user_id }}">
            <input type="hidden" name="nama" value="{{ $pendaftaran->nama }}">
            <input type="hidden" name="umur" value="{{ $pendaftaran->umur }}">
            <input type="hidden" name="alamat" value="{{ $pendaftaran->alamat }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="tanggal" class="form-control" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="anak_perkecil" class="form-label">Anak Perkecil</label>
                        <input type="text" id="anak_perkecil" class="form-control" name="anak_perkecil"
                            placeholder="Masukkan Anak Perkecil Anda">
                    </div>
                    <div class="mb-3">
                        <label for="td_bb" class="form-label">TD</label>
                        <input type="text" id="td_bb" class="form-control" name="td"
                            placeholder="Masukkan TD anda">
                    </div>
                    <div class="mb-3">
                        <label for="td_bb" class="form-label">BB</label>
                        <input type="text" id="td_bb" class="form-control" name="bb"
                            placeholder="Masukkan BB Anda">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="paritas" class="form-label">Paritas</label>
                        <input type="text" id="paritas" class="form-control" name="paritas"
                            placeholder="Masukkan Paritas Anda">
                    </div>
                    <div class="mb-3">
                        <label for="hasil_pemeriksaan" class="form-label">Hasil Pemeriksaan</label>
                        <input type="text" id="hasil_pemeriksaan" class="form-control" name="hasil_pemeriksaan"
                            placeholder="Masukkan Hasil Pemeriksaan Anda">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" rows="3" class="form-control" placeholder="Masukkan Keterangan Anda"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
