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
            <li class="{{ $title == 'Dashboard Bidan' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-bar-chart-fill"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="menu-header">Bidan</li>
            <li class="{{ $title == 'Profile Bidan' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-person-check"></i>
                    <span>Profile Bidan</span></a>
            </li>
            <li class="{{ $title == 'Jadwal Praktek' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-calendar-plus-fill"></i>
                    <span>Jadwal Praktek</span></a>
            </li>
            <li class="{{ $title == 'Data Pasien' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-clipboard2-pulse-fill"></i>
                    <span>Data Pasien</span></a>
            </li>
            <li class="{{ $title == 'Riwayat Pemeriksaan' ? 'active' : '' }}">
                <a class="nav-link" href=""><i class="bi bi-bookmarks-fill"></i>
                    <span>Riwayat Pemeriksaan</span></a>
            </li>
    </aside>
</div>
