<section id="profile">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="d-flex">
                    <img src="{{ asset('assets/img/pasien.png') }}" alt="" width="50px">
                    <div class="ms-3">
                        <p class="title text-white">{{ auth()->user()->username }}</p>
                        <p class="subtitle text-white">{{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <p class="headtitle">Tanggal Lahir</p>
            <p class="headsubtitle">{{ \Carbon\Carbon::parse(auth()->user()->tgl_lahir)->isoFormat('D MMMM Y') }}</p>
            <hr>
        </div>
        <div class="col-12">
            <p class="headtitle">Nomor Telpon/Wa</p>
            <p class="headsubtitle">{{ auth()->user()->no_wa }}</p>
            <hr>
        </div>
        <div class="col-12">
            <p class="headtitle">Alamat</p>
            <p class="headsubtitle">{{ auth()->user()->alamat }}</p>
            <hr>
        </div>
    </div>

    <a href="{{ route('logout') }}" class="btn btn-outline-danger d-block fw-bold py-md-3 py-2">Keluar</a>

</section>
