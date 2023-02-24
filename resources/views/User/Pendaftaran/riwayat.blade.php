@extends('User.Layouts.app', ['title' => 'Riwayat'])

@section('content')
    <section id="riwayat">
        <div class="row">
            <div class="col-12">
                <p class="headtitle">Halaman Registrasi</p>
                <p class="headsubtitle">Pendaftaran data Pasien </p>
                <img src="{{ asset('assets/img/riwayat.png') }}" alt="" width="100%">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <p class="headtitle">Pendaftaran Awal Kehamilan</p>
                <p class="success">Sukses</p>
                <p class="headsubtitle">Ahad, 12 Maret 2023</p>
                <hr>
            </div>
            <div class="col-12">
                <p class="headtitle">Pendaftaran Awal Kehamilan</p>
                <p class="success">Sukses</p>
                <p class="headsubtitle">Ahad, 12 Maret 2023</p>
                <hr>
            </div>
        </div>
    </section>
@endsection
