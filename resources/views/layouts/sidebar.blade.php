<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo"
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

                <li class="sidebar-item  {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
               

                <li class="sidebar-title">Tabel Master</li>

                <li
                    class="sidebar-item  has-sub {{ request()->routeIs('penyakit.*') || request()->routeIs('gejala.*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Penyakit</span>
                    </a>
                    <ul
                        class="submenu {{ request()->routeIs('penyakit.*') || request()->routeIs('gejala.*') ? 'active' : '' }}">
                        <li class="submenu-item {{ request()->routeIs('penyakit.*') ? 'active' : '' }}">
                            <a href="{{ route('penyakit.index') }}">Data Penyakit</a>
                        </li>
                        <li class="submenu-item {{ request()->routeIs('gejala.*') ? 'active' : '' }}">
                            <a href="{{ route('gejala.index') }}">Data Gejala</a>
                        </li>

                    </ul>
                </li>

                <li class="sidebar-item  {{ request()->routeIs('basispengetahuan') ? 'active' : '' }}">
                    <a href="{{ route('basispengetahuan.index') }}" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Basis Pengetahuan</span>
                    </a>
                </li>
                <li class="sidebar-item  {{ request()->routeIs('rule') ? 'active' : '' }}">
                    <a href="{{ route('rule.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Rule</span>
                    </a>
                </li>
                <li class="sidebar-item  {{ request()->routeIs('laporan') ? 'active' : '' }}">
                    <a href="{{ route('laporan.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Laporan</span>
                    </a>
                </li>
                <li class="sidebar-item  {{ request()->routeIs('user') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Data Pengguna</span>
                    </a>
                </li>
               
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
