@extends('Admin.Layouts.app', ['title' => 'Riwayat Pendaftaran'])

@section('content')
    <div class="card p-4">
        <form action="{{ Auth::user()->roles != 'admin' ? url('bidan-periksa-kunjungan-ulang-kehamilan') : url('periksa-kunjungan-ulang-kehamilan') }}" method="POST">
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
                        <label for="td_bb" class="form-label">TD/BB</label>
                        <input type="text" id="td_bb" class="form-control" name="td_bb"
                            placeholder="Masukkan TD/BB Anda">
                    </div>
                    <div class="mb-3">
                        <label for="paritas" class="form-label">Paritas</label>
                        <input type="text" id="paritas" class="form-control" name="paritas"
                            placeholder="Masukkan Paritas Anda">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="umur_kelahiran" class="form-label">Umur Pemeriksaan</label>
                        <input type="text" id="umur_kelahiran" class="form-control" name="umur_kelahiran"
                            placeholder="Masukkan Hasil Pemeriksaan Anda">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" rows="3" class="form-control" placeholder="Masukkan Keterangan Anda"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
