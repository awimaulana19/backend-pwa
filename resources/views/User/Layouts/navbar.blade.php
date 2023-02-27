<div class="fixed-bottom">
    {{-- kondisi layar besar --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="navbar">
                    <div class="isi-menu d-flex mx-auto">
                        <a href="{{ route('home') }}" id="halaman_home" class="text-center nav-item active">
                            <i class="bi bi-house-door-fill"></i>
                            <p class="mb-0" href="#">Home</p>
                        </a>
                        <a href="{{ route('registrasi') }}" id="halaman_registrasi" class="text-center nav-item">
                            <i class="bi bi-clipboard-plus-fill"></i>
                            <p class="mb-0" href="#">Registrasi</p>
                        </a>
                        <a href="{{ route('riwayat') }}" id="halaman_riwayat" class="text-center nav-item">
                            <i class="bi bi-clock-fill"></i>
                            <p class="mb-0" href="#">Riwayat</p>
                        </a>
                        <a href="{{ route('profile') }}" id="halaman_profil" class="text-center nav-item">
                            <i class="bi bi-person-fill"></i>
                            <p class="mb-0" href="#">Profile</p>
                        </a>
                        <a href="{{ route('informasi') }}" id="halaman_informasi" class="text-center nav-item">
                            <i class="bi bi-hospital-fill"></i>
                            <p class="mb-0" href="#">Informasi</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- kondisi layar kecil --}}
    <div class="mobile">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="navbar">
                    <div class="isi-menu d-flex mx-auto">
                         <a href="{{ route('home') }}" id="mobile_home" class="text-center nav-item">
                            <i class="bi bi-house-door-fill"></i>
                            <p class="mb-0" href="#">Home</p>
                        </a>
                        <a href="{{ route('registrasi') }}" id="mobile_registrasi" class="text-center nav-item">
                            <i class="bi bi-clipboard-plus-fill"></i>
                            <p class="mb-0" href="#">Registrasi</p>
                        </a>
                        <a href="{{ route('riwayat') }}" id="mobile_riwayat" class="text-center nav-item">
                            <i class="bi bi-clock-fill"></i>
                            <p class="mb-0" href="#">Riwayat</p>
                        </a>
                        <a href="{{ route('profile') }}" id="mobile_profil" class="text-center nav-item">
                            <i class="bi bi-person-fill"></i>
                            <p class="mb-0" href="#">Profile</p>
                        </a>
                        <a href="{{ route('informasi') }}" id="mobile_informasi" class="text-center nav-item">
                            <i class="bi bi-hospital-fill"></i>
                            <p class="mb-0" href="#">Informasi</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
