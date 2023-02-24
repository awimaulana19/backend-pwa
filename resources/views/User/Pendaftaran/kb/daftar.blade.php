@extends('User.Layouts.app', ['title' => 'Registrasi'])

@section('content')
    <section id="daftar">
        <div class="row mt-5">
            <div class="col-12">
                <p class="headtitle">Daftar KB</p>
                <p class="headsubtitle">Tuliskan data anda</p>
            </div>
            <div class="col-12 mt-4">
                <form action="{{ route('daftar_kb') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" id="tanggal" class="form-control" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="baru" class="form-label">Baru</label>
                        <input type="text" id="baru" class="form-control" name="baru">
                    </div>
                    <div class="mb-3">
                        <label for="lama" class="form-label">Lama</label>
                        <input type="text" id="lama" class="form-control" name="lama">
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="text" id="umur" class="form-control" name="umur" placeholder="Masukkan Umur Anda">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Masukkan Alamat Anda">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_anak" class="form-label">Jumlah Anak</label>
                        <input type="text" id="jumlah_anak" class="form-control" name="jumlah_anak" placeholder="Masukkan Jumlah Anak Anda">
                    </div>
                    <div class="mb-3">
                        <label for="td_bb" class="form-label">TD/BB</label>
                        <input type="text" id="td_bb" class="form-control" name="td_bb" placeholder="Masukkan TD/BB Anda">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                        <input type="date" id="tanggal_kembali" class="form-control" name="tanggal_kembali">
                    </div>
                    <div class="mb-3">
                        <label for="metode_kb" class="form-label">Metode KB</label>
                        <textarea name="metode_kb" id="metode_kb" rows="3" class="form-control" placeholder="Masukkan Metode KB"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" rows="3" class="form-control" placeholder="Masukkan Keterangan Anda"></textarea>
                    </div>
                    <button type="submit" class="btn py-md-3 py-2 mx-auto w-100">Kirim</button>
                </form>
            </div>
        </div>
    </section>
@endsection
