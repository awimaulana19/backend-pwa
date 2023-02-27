<section id="riwayat">
    <div class="row">
        <div class="col-12">
            <p class="headtitle">Halaman Registrasi</p>
            <p class="headsubtitle">Pendaftaran data Pasien </p>
            <img src="{{ asset('assets/img/riwayat.png') }}" alt="" width="100%">
        </div>
    </div>

    <div class="row mt-4">
        @if ($riwayat_persalinan->isNotEmpty())
            <div class="col-12">
                <p class="headtitle">Pendaftaran Persalinan</p>
                @foreach ($riwayat_persalinan as $item)
                    <p class="headsubtitle mb-2 mt-1">Pendaftaran {{ $loop->iteration }}</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nomor Registrasi :
                                    {{ $item->no_registrasi }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama : {{ $item->nama }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Umur : {{ $item->umur }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Hari : {{ $item->hari }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Tanggal Lahir : {{ $item->ttl }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Pukul : {{ $item->pukul }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="nama" class="form-label">Jenis Kelamin : {{ $item->jk }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">BB/PB : {{ $item->bb_pb }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Paritas : {{ $item->paritas }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Pekerjaan : {{ $item->pekerjaan }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Alamat : {{ $item->alamat }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Keterangan : {{ $item->keterangan }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
            </div>
        @endif

        @if ($riwayat_kb->isNotEmpty())
            <div class="col-12">
                <p class="headtitle">Pendaftaran KB</p>
                @foreach ($riwayat_kb as $item)
                    <p class="headsubtitle mb-2 mt-1">Pendaftaran {{ $loop->iteration }}</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama : {{ $item->nama }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Baru : {{ $item->baru }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Tanggal : {{ $item->tanggal }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Umur : {{ $item->umur }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Alamat : {{ $item->alamat }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Jumlah Anak : {{ $item->jumlah_anak }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="nama" class="form-label">Metode KB : {{ $item->metode_kb }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Lama : {{ $item->lama }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Tanggal Kembali :
                                    {{ $item->tanggal_kembali }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">TD/BB : {{ $item->td_bb }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Keterangan : {{ $item->keterangan }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
            </div>
        @endif

        @if ($pemeriksaanAwalKehamilan->isNotEmpty())
            <div class="col-12">
                <p class="headtitle">Pendaftaran Pemeriksaan Awal Kehamilan</p>
                @foreach ($pemeriksaanAwalKehamilan as $item)
                    <p class="headsubtitle mb-2 mt-1">Pendaftaran {{ $loop->iteration }}</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="nama" class="form-label">Tanggal : {{ $item->tanggal }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama : {{ $item->nama }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Umur : {{ $item->umur }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Alamat : {{ $item->alamat }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Paritas : {{ $item->paritas }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="nama" class="form-label">Anak Perkecil :
                                    {{ $item->anak_perkecil }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">TD/BB : {{ $item->td_bb }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Hasil Pemeriksaan :
                                    {{ $item->hasil_pemeriksaan }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Keterangan : {{ $item->keterangan }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
            </div>
        @endif

        @if ($kunjunganUlangKehamilan->isNotEmpty())
            <div class="col-12">
                <p class="headtitle">Pendaftaran Kunjungan Ulang Kehamilan</p>
                @foreach ($kunjunganUlangKehamilan as $item)
                    <p class="headsubtitle mb-2 mt-1">Pendaftaran {{ $loop->iteration }}</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="nama" class="form-label">Tanggal : {{ $item->tanggal }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama : {{ $item->nama }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Umur : {{ $item->umur }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Alamat : {{ $item->alamat }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Paritas : {{ $item->paritas }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="nama" class="form-label">TD/BB : {{ $item->td_bb }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Umur Kehamilan :
                                    {{ $item->umur_kelahiran }}</label>
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Keterangan : {{ $item->keterangan }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
            </div>
        @endif
    </div>
</section>
