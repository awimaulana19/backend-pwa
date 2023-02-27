@extends('Admin.Layouts.app', ['title' => 'Riwayat Pendaftaran'])

@section('content')
    <div class="card p-4">
        <form action="{{ Auth::user()->roles != 'admin' ? route('bidan_periksa_persalinan') : route('periksa_persalinan') }}" method="POST">
            @csrf
            <input type="hidden" name="pendaftaran_id" value="{{ $pendaftaran->id }}">
            <input type="hidden" name="antrian" value="{{ $pendaftaran->antrian }}">
            <input type="hidden" name="user_id" value="{{ $pendaftaran->user_id }}">
            <input type="hidden" name="nama" value="{{ $pendaftaran->nama }}">
            <input type="hidden" name="jk" value="{{ $pendaftaran->jk }}">
            <input type="hidden" name="umur" value="{{ $pendaftaran->umur }}">
            <input type="hidden" name="alamat" value="{{ $pendaftaran->alamat }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="no_registrasi" class="form-label">Nomor Registrasi</label>
                        <input type="text" id="no_registrasi" class="form-control" name="no_registrasi"
                            placeholder="Masukkan Nomor Registrasi Anda">
                    </div>
                    <div class="mb-3">
                        <label for="hari" class="form-label">Hari</label>
                        <input type="text" id="hari" class="form-control" name="hari"
                            placeholder="Masukkan Hari Anda">
                    </div>
                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="ttl" class="form-control" name="ttl">
                    </div>
                    <div class="mb-3">
                        <label for="pukul" class="form-label">Pukul</label>
                        <input type="text" id="pukul" class="form-control" name="pukul"
                            placeholder="Masukkan pukul Anda">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="bb_pb" class="form-label">BB/PB</label>
                        <input type="text" id="bb_pb" class="form-control" name="bb_pb"
                            placeholder="Masukkan BB/PB Anda">
                    </div>
                    <div class="mb-3">
                        <label for="paritas" class="form-label">Paritas</label>
                        <input type="text" id="paritas" class="form-control" name="paritas"
                            placeholder="Masukkan Paritas Anda">
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" id="pekerjaan" class="form-control" name="pekerjaan"
                            placeholder="Masukkan Pekerjaan Anda">
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
