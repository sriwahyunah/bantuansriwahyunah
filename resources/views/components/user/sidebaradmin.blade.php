<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- BRAND LOGO -->
    <a href="{{ url('/dashboard/admin') }}" class="brand-link text-center">
        <span class="brand-text font-weight-light">ADMIN PANEL</span>
    </a>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <!-- USER PANEL (opsional tapi bikin AdminLTE lebih hidup) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block text-white">
                    Admin
                </a>
            </div>
        </div>

        <!-- MENU -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                <!-- DASHBOARD -->
                <li class="nav-item">
                    <a href="{{ url('/dashboard/admin') }}"
                       class="nav-link {{ request()->is('dashboard/admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- USER -->
                <li class="nav-item">
                    <a href="{{ url('/user') }}"
                       class="nav-link {{ request()->is('user*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>User</p>
                    </a>
                </li>

                <!-- PENERIMA -->
                <li class="nav-item">
                    <a href="{{ url('/penerima') }}"
                       class="nav-link {{ request()->is('penerima*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Penerima</p>
                    </a>
                </li>

                <!-- MASTER DATA -->
                <li class="nav-header">MASTER DATA</li>

                <li class="nav-item">
                    <a href="{{ url('/kategori-bantuan') }}"
                       class="nav-link {{ request()->is('kategori-bantuan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Kategori Bantuan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/jenis-bantuan') }}"
                       class="nav-link {{ request()->is('jenis-bantuan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-box"></i>
                        <p>Jenis Bantuan</p>
                    </a>
                </li>

                <!-- TRANSAKSI -->
                <li class="nav-header">TRANSAKSI</li>

                <li class="nav-item">
                    <a href="{{ url('/pengajuan') }}"
                       class="nav-link {{ request()->is('pengajuan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Pengajuan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/penyaluran') }}"
                       class="nav-link {{ request()->is('penyaluran*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hand-holding"></i>
                        <p>Penyaluran</p>
                    </a>
                </li>

                <!-- LAPORAN -->
                <li class="nav-header">LAPORAN</li>

                <li class="nav-item">
                    <a href="{{ url('/laporan') }}"
                       class="nav-link {{ request()->is('laporan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Laporan</p>
                    </a>
                </li>

                <!-- LOGOUT -->
                <li class="nav-item mt-3">
                    <a href="{{ url('/logout') }}" class="nav-link text-danger">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>

        </nav>

    </div>

</aside>