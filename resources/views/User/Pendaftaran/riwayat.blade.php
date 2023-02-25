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
            @foreach ($riwayat as $item)
                <div class="col-12">
                    <p class="headtitle">Pendaftaran {{ $item->periksa }}</p>
                    <p class="success">Sukses</p>
                    <p class="headsubtitle">Ahad, 12 Maret 2023</p>
                    <a href="" class="btn btn-success text-white w-100 mt-2">Hasil Pemeriksaan</a>
                    <hr>
                </div>
            @endforeach
        </div>
    </section>
@endsection
