<section id="registrasi">
    @include('sweetalert::alert')
    <div class="row">
        <div class="col-12">
            <p class="headtitle">Halaman Registrasi</p>
            <p class="headsubtitle">Pendaftaran data Pasien </p>
            <img src="{{ asset('assets/img/registrasi.png') }}" alt="" width="100%">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-6 mb-4">
            <a href="{{ route('pendaftaranpemeriksaanawal') }}" id="halaman_pemeriksaanawal" class="card">
                <img src="{{ asset('assets/img/awalkehamilan.png') }}" class="d-block mx-auto" alt="">
                <p class="text-center">Pendaftaran Pemeriksaan
                    Awal Kehamilan</p>
            </a>
        </div>
        <div class="col-6 mb-4">
            <a href="{{ route('pendaftarankunjunganulang') }}" id="halaman_pemeriksaanulang" class="card">
                <img src="{{ asset('assets/img/ulangkehamilan.png') }}" class="d-block mx-auto" alt="">
                <p class="text-center">Pendaftaran Kunjungan
                    Ulang Kehamilan</p>
            </a>
        </div>
        <div class="col-6 mb-4">
            <a href="{{ route('pendaftaranpersalinan') }}" id="halaman_persalinan" class="card">
                <img src="{{ asset('assets/img/pendaftaranpersalinan.png') }}" class="d-block mx-auto" alt="">
                <p class="text-center">Pendaftaran <br> Persalinan</p>
            </a>
        </div>
        <div class="col-6 mb-4">
            <a href="{{ route('pendaftarankb') }}" id="halaman_kb" class="card">
                <img src="{{ asset('assets/img/pendaftarankb.png') }}" class="d-block mx-auto" alt="">
                <p class="text-center">Pendaftaran Keluarga
                    Berencana</p>
            </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <p class="title">Nomor Antrian</p>
            <p class="subtitle">Tampil data antrian anda</p>
        </div>
        @foreach ($pendaftaran as $item)
            <div class="col-12">
                <hr>
                <p class="title">Pendaftaran {{ $item->periksa }}</p>
                <div class="d-flex">
                    <p class="text-danger subtitle">Antrian Sekarang <span
                            class="fw-bold">{{ $item->antrian_sekarang }}</span>
                    </p>
                    <p class="text-success ms-auto subtitle">Antrian Anda <span
                            class="fw-bold">{{ $item->antrian }}</span></p>
                </div>
                <hr>
            </div>
        @endforeach
    </div>
</section>

<script>
    $(document).on('click', '#halaman_pemeriksaanawal', function(e) {
        e.preventDefault();

        var url = $(this).attr('href');

        $.ajax({
            type: 'GET',
            url: url,
            success: function(data) {
                $('#konten_halaman').html(data);
                history.pushState({}, null, url);
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    });
    $(document).on('click', '#halaman_pemeriksaanulang', function(e) {
        e.preventDefault();

        var url = $(this).attr('href');

        $.ajax({
            type: 'GET',
            url: url,
            success: function(data) {
                $('#konten_halaman').html(data);
                history.pushState({}, null, url);
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    });
    $(document).on('click', '#halaman_persalinan', function(e) {
        e.preventDefault();

        var url = $(this).attr('href');

        $.ajax({
            type: 'GET',
            url: url,
            success: function(data) {
                $('#konten_halaman').html(data);
                history.pushState({}, null, url);
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    });
    $(document).on('click', '#halaman_kb', function(e) {
        e.preventDefault();

        var url = $(this).attr('href');

        $.ajax({
            type: 'GET',
            url: url,
            success: function(data) {
                $('#konten_halaman').html(data);
                history.pushState({}, null, url);
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    });
</script>
