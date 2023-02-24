@section('content')
    <section id="daftar">
        <div class="row mt-5">
            <div class="col-12">
                <p class="headtitle">Daftar Persalinan</p>
                <p class="headsubtitle">Tuliskan data anda</p>
            </div>
            <div class="col-12 mt-4">
                <form action="{{ route('daftar_persalinan') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="no_registrasi" class="form-label">Nomor Registrasi</label>
                        <input type="text" id="no_registrasi" class="form-control" name="no_registrasi" placeholder="Masukkan Nomor Registrasi Anda">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="text" id="umur" class="form-control" name="umur" placeholder="Masukkan Umur Anda">
                    </div>
                    <div class="mb-3">
                        <label for="hari" class="form-label">Hari</label>
                        <input type="text" id="hari" class="form-control" name="hari" placeholder="Masukkan Hari Anda">
                    </div>
                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="ttl" class="form-control" name="ttl">
                    </div>
                    <div class="mb-3">
                        <label for="pukul" class="form-label">Pukul</label>
                        <input type="text" id="pukul" class="form-control" name="pukul" placeholder="Masukkan pukul Anda">
                    </div>
                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jk" id="jk">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="bb_pb" class="form-label">BB/PB</label>
                        <input type="text" id="bb_pb" class="form-control" name="bb_pb" placeholder="Masukkan BB/PB Anda">
                    </div>
                    <div class="mb-3">
                        <label for="paritas" class="form-label">Paritas</label>
                        <input type="text" id="paritas" class="form-control" name="paritas" placeholder="Masukkan Paritas Anda">
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" id="pekerjaan" class="form-control" name="pekerjaan" placeholder="Masukkan Pekerjaan Anda">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control" placeholder="Masukkan Alamat Anda"></textarea>
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
