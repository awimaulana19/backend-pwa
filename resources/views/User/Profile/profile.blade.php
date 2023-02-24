@extends('User.Layouts.app', ['title' => 'Profile'])

@section('content')
    <section id="profile">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex">
                        <img src="{{ asset('assets/img/pasien.png') }}" alt="" width="50px">
                        <div class="ms-3">
                            <p class="title text-white">Mr. Jonson</p>
                            <p class="subtitle text-white">Mr. Jonson@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <p class="headtitle">Tanggal Lahir</p>
                <p class="headsubtitle">20 Desember 2002</p>
                <hr>
            </div>
            <div class="col-12">
                <p class="headtitle">Nomor Telpon/Wa</p>
                <p class="headsubtitle">082345678910</p>
                <hr>
            </div>
            <div class="col-12">
                <p class="headtitle">Alamat</p>
                <p class="headsubtitle">Jl. Sembarang no 1</p>
                <hr>
            </div>
        </div>

        <a href="#" class="btn btn-outline-danger d-block fw-bold py-md-3 py-2">Keluar</a>

    </section>
@endsection
