<div class="fixed-bottom">
    {{-- kondisi layar besar --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="navbar">
                    <div class="isi-menu d-flex mx-auto">
                        <a href="{{ route('home') }}" class="text-center nav-item {{ $title == 'Home' ? 'active' : '' }}">
                            <i class="bi bi-house-door-fill"></i>
                            <p class="mb-0" href="#">Home</p>
                        </a>
                        <a href="{{ route('registrasi') }}" class="text-center nav-item {{ $title == 'Registrasi' ? 'active' : '' }}">
                            <i class="bi bi-clipboard-plus-fill"></i>
                            <p class="mb-0" href="#">Registrasi</p>
                        </a>
                        <a href="{{ route('riwayat') }}" class="text-center nav-item {{ $title == 'Riwayat' ? 'active' : '' }}">
                            <i class="bi bi-clock-fill"></i>
                            <p class="mb-0" href="#">Riwayat</p>
                        </a>
                        <a href="{{ route('profile') }}" class="text-center nav-item {{ $title == 'Profile' ? 'active' : '' }}">
                            <i class="bi bi-person-fill"></i>
                            <p class="mb-0" href="#">Profile</p>
                        </a>
                        <a href="{{ route('informasi') }}" class="text-center nav-item {{ $title == 'Informasi' ? 'active' : '' }}">
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
                         <a href="{{ route('home') }}" class="text-center nav-item {{ $title == 'Home' ? 'active' : '' }}">
                            <i class="bi bi-house-door-fill"></i>
                            <p class="mb-0" href="#">Home</p>
                        </a>
                        <a href="{{ route('registrasi') }}" class="text-center nav-item {{ $title == 'Registrasi' ? 'active' : '' }}">
                            <i class="bi bi-clipboard-plus-fill"></i>
                            <p class="mb-0" href="#">Registrasi</p>
                        </a>
                        <a href="{{ route('riwayat') }}" class="text-center nav-item {{ $title == 'Riwayat' ? 'active' : '' }}">
                            <i class="bi bi-clock-fill"></i>
                            <p class="mb-0" href="#">Riwayat</p>
                        </a>
                        <a href="{{ route('profile') }}" class="text-center nav-item {{ $title == 'Profile' ? 'active' : '' }}">
                            <i class="bi bi-person-fill"></i>
                            <p class="mb-0" href="#">Profile</p>
                        </a>
                        <a href="{{ route('informasi') }}" class="text-center nav-item {{ $title == 'Informasi' ? 'active' : '' }}">
                            <i class="bi bi-hospital-fill"></i>
                            <p class="mb-0" href="#">Informasi</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
