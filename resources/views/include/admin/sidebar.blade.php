<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('backend/assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item {{ url()->current() == url('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ url('admin/dashboard') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item has-sub {{ request()->routeIs('admin.user.*') || request()->routeIs('admin.petugas.*') ? 'active' : '' }}">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Petugas</span>
                </a>
                <ul class="submenu {{ request()->routeIs('admin.user.*') || request()->routeIs('admin.petugas.*') ? 'active' : '' }}">
                    <li class="submenu-item {{ request()->routeIs('admin.user.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.user.index') }}">Akun Petugas</a>
                    </li>
                    <li class="submenu-item {{ request()->routeIs('admin.petugas.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.petugas.index') }}">Data Petugas</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item has-sub {{ request()->routeIs('admin.kategori_pengaduan.*') || request()->routeIs('admin.pengaduan.*') ? 'active' : '' }}">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-inboxes-fill"></i>
                    <span>Pengaduan</span>
                </a>
                <ul class="submenu {{ request()->routeIs('admin.kategori_pengaduan.*') || request()->routeIs('admin.pengaduan.*') ? 'active' : '' }}">
                    <li class="submenu-item {{ request()->routeIs('admin.kategori_pengaduan.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.kategori_pengaduan.index') }}">Kategori Pengaduan</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-vertical-1-column.html">Pengaduan Masyarakat</a>
                    </li>
                </ul>
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
