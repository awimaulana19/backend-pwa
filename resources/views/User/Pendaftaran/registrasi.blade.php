@extends('User.Layouts.app', ['title' => 'Registrasi'])

@section('content')
    <section id="registrasi">
        <div class="row">
            <div class="col-12">
                <p class="headtitle">Halaman Registrasi</p>
                <p class="headsubtitle">Pendaftaran data Pasien </p>
                <img src="{{ asset('assets/img/registrasi.png') }}" alt="" width="100%">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-6 mb-4">
                <a href="#" class="card">
                    <img src="{{ asset('assets/img/awalkehamilan.png') }}" class="d-block mx-auto" alt="">
                    <p class="text-center">Pendaftaran Pemeriksaan
                        Awal Kehamilan</p>
                </a>
            </div>
            <div class="col-6 mb-4">
                <a href="#" class="card">
                    <img src="{{ asset('assets/img/ulangkehamilan.png') }}" class="d-block mx-auto" alt="">
                    <p class="text-center">Pendaftaran Kunjungan
                        Ulang Kehamilan</p>
                </a>
            </div>
            <div class="col-6 mb-4">
                <a href="" class="card">
                    <img src="{{ asset('assets/img/pendaftaranpersalinan.png') }}" class="d-block mx-auto" alt="">
                    <p class="text-center">Pendaftaran <br> Persalinan</p>
                </a>
            </div>
            <div class="col-6 mb-4">
                <a href="" class="card">
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
        </div>
    </section>
@endsection
