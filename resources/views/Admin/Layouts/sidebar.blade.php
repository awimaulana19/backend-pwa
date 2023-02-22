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

            {{-- data pendaftaran --}}
            <li class="menu-header">Data Pendaftaran</li>
            <li class="{{ $title == 'Data Pendaftaran' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-clipboard2-data-fill"></i>
                    <span>Data Pendaftaran</span></a>
            </li>
            <li class="{{ $title == 'Riwayat Pendaftaran' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-clock-history"></i>
                    <span>Riwayat Pendaftaran</span></a>
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
