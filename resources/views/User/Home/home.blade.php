<section id="home">
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <div>
                    <p class="headtitle">Selamat Datang</p>
                    <p class="headsubtitle">di Bidan Praktek Swasta Dina Bantuk</p>
                </div>
                <div class="ms-auto align-self-center">
                    <div class="dropstart">
                        <img src="{{ asset('assets/img/pasien.png') }}" alt="" class="user dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu">
                            <li class="text-center">
                                <a href="{{ route('logout') }}"
                                    class="text-decoration-none fw-bold text-danger">Keluar</a>
                            </li>
                        </ul>
                    </div>
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
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner px-3 pb-1">
                @foreach ($testimoni as $item)
                    <div class="carousel-item {{ $item->id == 1 ? 'active' : '' }}">
                        <div class="col-12 mt-2">
                            <div class="card">
                                <div class="d-flex">
                                    <div class="align-self-center">
                                        <img src="{{ asset('assets/img/pasien.png') }}" alt="" class="user">
                                    </div>
                                    <div class="ms-3">
                                        <p class="title">{{ $item->username }}</p>
                                        <p class="subtitle">{{ $item->email }}</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 15px;">
                                    <div class="col-6">
                                        <p class="title">Kritik</p>
                                        <p class="subtitle text-justify">
                                            {{ $item->kritik }}
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="title">Saran</p>
                                        <p class="subtitle text-justify">
                                            {{ $item->saran }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

</section>
