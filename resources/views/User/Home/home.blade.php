@extends('User.Layouts.app', ['title' => 'Home'])

@section('content')
    <section id="home">
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <div>
                        <p class="headtitle">Selamat Datang</p>
                        <p class="headsubtitle">di Bidan Praktek Swasta Dina Bantuk</p>
                    </div>
                    <div class="ms-auto align-self-center">
                        <img src="{{ asset('assets/img/pasien.png') }}" alt="" class="user">
                    </div>
                </div>
            </div>
        </div>

        <div class="row slide">
            <div class="col-12">
                <img src="{{ asset('assets/img/home.png') }}" alt="" width="100%">
            </div>
        </div>

        <div class="row praktek">
            <div class="col-12">
                <p class="title">Praktek Bidan</p>
                <p class="subtitle">Jenis Praktek Bidan Dina Bantuk</p>
            </div>
            <div class="row mt-4">
                <div class="col-3">
                    <img src="{{ asset('assets/img/kehamilan.png') }}" class="mx-auto d-block" alt="">
                    <p class="keteranganfitur">Kehamilan</p>
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/img/kb.png') }}" class="mx-auto d-block" alt="">
                    <p class="keteranganfitur">Keluarga Berencana</p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('assets/img/persalinan.png') }}" class="mx-auto d-block" alt="">
                    <p class="keteranganfitur">Persalinan</p>
                </div>
            </div>
        </div>

        <div class="row testimoni">
            <div class="col-12">
                <p class="title">Testimoni</p>
                <p class="subtitle">Kritik dan Saran Pasien</p>
            </div>
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="d-flex">
                        <div class="align-self-center">
                            <img src="{{ asset('assets/img/pasien.png') }}" alt="" class="user">
                        </div>
                        <div class="ms-3">
                            <p class="title">Rizki Madya</p>
                            <p class="subtitle">rizkimadya88@gmail.com</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-6">
                            <p class="title">Kritik</p>
                            <p class="subtitle text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aliquam saepeime perferendis
                                molestias
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="title">Saran</p>
                            <p class="subtitle text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem aliquam saepeime perferendis
                                molestias
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
