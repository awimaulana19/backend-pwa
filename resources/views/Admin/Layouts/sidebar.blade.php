<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">
                <p class="mt-3 mb-0">Praktek Bidan</p>
                <p style="margin-top: -8px;">Mandiri</p>
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">PBM</a>
        </div>
        <ul class="sidebar-menu mt-3">
            <li class="menu-header">Dashboard</li>
            <li class="{{ $title == 'Dashboard Admin' ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ Auth::user()->roles != 'admin' ? 'dashboard-bidan' : 'dashboard-admin' }}"><i
                        class="bi bi-bar-chart-fill"></i>
                    <span>Dashboard</span></a>
            </li>

            {{-- data kehamilan --}}
            <li class="menu-header">Data Pemeriksaan Kehamilan</li>
            <li class="{{ $title == 'Pemeriksaan Awal' ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ Auth::user()->roles != 'admin' ? url('pemeriksaan-awal-kehamilan-bidan') : route('pemeriksaan-awal-kehamilan.index') }}"><i
                        class="bi bi-calendar-plus-fill"></i>
                    <span>Pemeriksaan Awal</span></a>
            </li>
            <li class="{{ $title == 'Kunjungan Ulang' ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ Auth::user()->roles != 'admin' ? url('kunjungan-ulang-kehamilan-bidan') : route('kunjungan-ulang-kehamilan.index') }}"><i
                        class="bi bi-calendar2-check-fill"></i>
                    <span>Kunjungan Ulang</span></a>
            </li>

            {{-- data Persalinan --}}
            <li class="menu-header">Data Persalinan</li>
            <li class="{{ $title == 'Data Persalinan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ Auth::user()->roles != 'admin' ? '/persalinan-bidan' : '/persalinan' }}"><i
                        class="bi bi-person-heart"></i>
                    <span>Data Persalinan</span></a>
            </li>

            {{-- data keluarga berencana --}}
            <li class="menu-header">Data Keluarga Berencana</li>
            <li class="{{ $title == 'Keluarga Berencana' ? 'active' : '' }}">
                <a class="nav-link" href="{{ Auth::user()->roles != 'admin' ? '/kb-bidan' : '/kb' }}"><i
                        class="bi bi-people-fill"></i>
                    <span>Data KB</span></a>
            </li>

            {{-- data riwayat pendaftaran --}}
            <li class="menu-header">Riwayat Pendaftaran</li>
            <li class="{{ $title == 'Riwayat Pendaftaran' ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ Auth::user()->roles != 'admin' ? 'pendaftaran-bidan' : 'pendaftaran' }}"><i
                        class="bi bi-clock-history"></i>
                    <span>Riwayat Pendaftaran</span></a>
            </li>

            {{-- data kritik dan saran --}}
            <li class="menu-header">Kritik dan Saran</li>
            <li class="{{ $title == 'Kritik dan Saran' ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ Auth::user()->roles != 'admin' ? 'Kritik-Saran-Bidan' : 'Kritik-Saran' }}"><i
                        class="bi bi-ui-checks"></i>
                    <span>Kritik dan Saran</span></a>
            </li>

            {{-- data pengguna --}}
            <div {{ auth()->user()->roles == 'bidan' ? 'hidden' : '' }}>
                <li class="menu-header">Data Pengguna</li>
                <li class="{{ $title == 'Data Bidan' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('databidan.index') }}"><i class="bi bi-person-rolodex"></i>
                        <span>Data Bidan</span></a>
                </li>
                <li class="{{ $title == 'Data Pasien' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('datapasien.index') }}"><i
                            class="bi bi-clipboard2-pulse-fill"></i>
                        <span>Data Pasien</span></a>
                </li>
            </div>
        </ul>
    </aside>
</div>
