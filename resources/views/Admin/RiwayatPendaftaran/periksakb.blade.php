@extends('Admin.Layouts.app', ['title' => 'Riwayat Pendaftaran'])

@section('content')
    <div class="card p-4">
        <form action="{{ Auth::user()->roles != 'admin' ? route('bidan_periksa_kb') : route('periksa_kb') }}" method="POST">
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
                        <label for="baru" class="form-label">Baru</label>
                        <select class="form-select" aria-label="Default select example" name="baru">
                            <option selected>Silahkan Pilih</option>
                            <option value="iya">iya</option>
                            <option value="tidak">tidak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" id="tanggal" class="form-control" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_anak" class="form-label">Jumlah Anak</label>
                        <input type="text" id="jumlah_anak" class="form-control" name="jumlah_anak"
                            placeholder="Masukkan Jumlah Anak Anda">
                    </div>
                    <div class="mb-3">
                        <label for="metode_kb" class="form-label">Metode KB</label>
                        <select class="form-select" aria-label="Default select example" name="metode_kb">
                            <option selected>Silahkan Pilih</option>
                            <option value="IUD">IUD</option>
                            <option value="Implan">Implan</option>
                            <option value="Suntik">Suntik</option>
                            <option value="Kondom">Kondom</option>
                            <option value="Pil">Pil</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lama" class="form-label">Lama</label>
                        <select class="form-select" aria-label="Default select example" name="lama">
                            <option selected>Silahkan Pilih</option>
                            <option value="iya">iya</option>
                            <option value="tidak">tidak</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                        <input type="date" id="tanggal_kembali" class="form-control" name="tanggal_kembali">
                    </div>
                    <div class="mb-3">
                        <label for="td_bb" class="form-label">TD</label>
                        <input type="text" id="td_bb" class="form-control" name="td"
                            placeholder="Masukkan TD Anda">
                    </div>
                    <div class="mb-3">
                        <label for="td_bb" class="form-label">BB</label>
                        <input type="text" id="td_bb" class="form-control" name="bb"
                            placeholder="Masukkan BB Anda">
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
