<aside class="main-sidebar sidebar-dark-primary elevation-4">

    {{-- BRAND LOGO --}}
    <a href="{{ url('/dashboard/admin') }}"
        class="brand-link d-flex align-items-center">

        <span class="brand-text font-weight-bold mx-auto">
            Bantuan UNA
        </span>

    </a>

    {{-- SIDEBAR --}}
    <div class="sidebar">

        {{-- USER PANEL --}}
        <div class="user-panel">

            <div class="d-flex align-items-center">

                <div class="sidebar-user-circle">
                    AD
                </div>

                <div class="ml-2">

                    <div class="sidebar-user-name">
                        Administrator
                    </div>

                    <small class="text-success">
                        ● Online
                    </small>

                </div>

            </div>

        </div>

        {{-- MENU --}}
        <nav class="mt-3">

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                {{-- DASHBOARD --}}
                <li class="nav-item">

                    <a href="{{ url('/dashboard/admin') }}"
                        class="nav-link {{ request()->is('dashboard/admin') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-home"></i>

                        <p>Dashboard</p>

                    </a>

                </li>

                {{-- USER --}}
                <li class="nav-item">

                    <a href="{{ url('/user') }}"
                        class="nav-link {{ request()->is('user*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-users"></i>

                        <p>User</p>

                    </a>

                </li>

                {{-- PENERIMA --}}
                <li class="nav-item">

                    <a href="{{ url('/penerima') }}"
                        class="nav-link {{ request()->is('penerima*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-user-check"></i>

                        <p>Penerima</p>

                    </a>

                </li>

                {{-- MASTER DATA --}}
                <li class="nav-header">
                    MASTER DATA
                </li>

                {{-- KATEGORI --}}
                <li class="nav-item">

                    <a href="{{ url('/kategori-bantuan') }}"
                        class="nav-link {{ request()->is('kategori-bantuan*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-list"></i>

                        <p>Kategori Bantuan</p>

                    </a>

                </li>

                {{-- JENIS --}}
                <li class="nav-item">

                    <a href="{{ url('/jenis-bantuan') }}"
                        class="nav-link {{ request()->is('jenis-bantuan*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-box-open"></i>

                        <p>Jenis Bantuan</p>

                    </a>

                </li>

                {{-- TRANSAKSI --}}
                <li class="nav-header">
                    TRANSAKSI
                </li>

                {{-- PENGAJUAN --}}
                <li class="nav-item">

                    <a href="{{ url('/pengajuan') }}"
                        class="nav-link {{ request()->is('pengajuan*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-file-alt"></i>

                        <p>Pengajuan</p>

                    </a>

                </li>

                {{-- PENYALURAN --}}
                <li class="nav-item">

                    <a href="{{ url('/penyaluran') }}"
                        class="nav-link {{ request()->is('penyaluran*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-hand-holding-heart"></i>

                        <p>Penyaluran</p>

                    </a>

                </li>

                {{-- LAPORAN --}}
                <li class="nav-header">
                    LAPORAN
                </li>

                <li class="nav-item">

                    <a href="{{ url('/laporan') }}"
                        class="nav-link {{ request()->is('laporan*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-chart-bar"></i>

                        <p>Laporan</p>

                    </a>

                </li>

                {{-- LOGOUT --}}
                <li class="nav-item mt-4">

                    <a href="{{ url('/logout') }}"
                        class="nav-link nav-logout">

                        <i class="nav-icon fas fa-sign-out-alt"></i>

                        <p>Logout</p>

                    </a>

                </li>

            </ul>

        </nav>

    </div>

</aside>