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
                <a class="nav-link" href="/dashboard"><i class="bi bi-bar-chart-fill"></i>
                    <span>Dashboard</span></a>
            </li>

            {{-- Data Pemeriksaan Kehamilan --}}
            <li class="menu-header">Data Pemeriksaan Kehamilan</li>
            <li class="{{ $title == 'Pemeriksaan Awal' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-calendar-plus-fill"></i>
                    <span>Pemeriksaan Awal</span></a>
            </li>
            <li class="{{ $title == 'Kunjungan Ulang' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-calendar2-check-fill"></i>
                    <span>Kunjungan Ulang</span></a>
            </li>
            <li class="{{ $title == 'Riwayat Pemeriksaan' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-calendar3"></i>
                    <span>Riwayat Data Kehamilan</span></a>
            </li>

            {{-- Data Persalinan --}}
            <li class="menu-header">Data Pemeriksaan Persalinan</li>
            <li class="{{ $title == 'Data Persalinan' ? 'active' : '' }}">
                <a class="nav-link" href="/persalinan"><i class="bi bi-person-heart"></i>
                    <span>Data Persalinan</span></a>
            </li>
            <li class="{{ $title == 'Riwayat Persalinan' ? 'active' : '' }}">
                <a class="nav-link" href="/riwayatpersalinan"><i class="bi bi-person-hearts"></i>
                    <span>Riwayat Data Persalinan</span></a>
            </li>

            {{-- data KB --}}
            <li class="menu-header">Data Keluarga Berencana</li>
            <li class="{{ $title == 'Data KB' ? 'active' : '' }}">
                <a class="nav-link" href="/kb"><i class="bi bi-people"></i>
                    <span>Data KB</span></a>
            </li>
            <li class="{{ $title == 'Riwayat Data KB' ? 'active' : '' }}">
                <a class="nav-link" href="/riwayatkb"><i class="bi bi-people-fill"></i>
                    <span>Riwayat Data KB</span></a>
            </li>

            {{-- data pengguna --}}
            <li class="menu-header">Data Pengguna</li>
            <li class="{{ $title == 'Data Bidan' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-person-rolodex"></i>
                    <span>Data Bidan</span></a>
            </li>
            <li class="{{ $title == 'Data Pasien' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-clipboard2-pulse-fill"></i>
                    <span>Data Pasien</span></a>
            </li>
    </aside>
</div>
