<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('backend/assets/images/logo/logo.png') }}" alt="Logo"
                        srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item {{ url()->current() == url('petugas/dashboard') ? 'active' : '' }}">
                <a href="{{ url('petugas/dashboard') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ url()->current() == url('petugas/laporan') ? 'active' : '' }}">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-info-circle-fill"></i>
                    <span>Laporan Pengaduan</span>
                </a>
            </li>

            <li class="sidebar-item {{ url()->current() == url('petugas/histori') ? 'active' : '' }}">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-clock-history"></i>
                    <span>Histori Pengerjaan Tugas</span>
                </a>
            </li>

            <li class="sidebar-title">Raise Support</li>

            <li class="sidebar-item  ">
                <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                    <i class="bi bi-life-preserver"></i>
                    <span>Documentation</span>
                </a>
            </li>

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
