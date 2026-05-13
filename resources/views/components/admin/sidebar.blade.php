<aside class="main-sidebar sidebar-dark-primary elevation-4">

    {{-- Logo --}}
    <a href="{{ url('/admin/dashboard') }}" class="brand-link text-center">
        <span class="brand-text font-weight-light">
            Bantuan UNA
        </span>
    </a>

    {{-- Sidebar --}}
    <div class="sidebar">

        {{-- User Panel --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">

            <div class="image">
                <div class="sidebar-user-image">
                    AD
                </div>
            </div>

            <div class="info">
                <a href="#" class="d-block text-white">
                    Admin
                </a>
            </div>

        </div>

        {{-- Menu --}}
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="{{ url('/admin/dashboard') }}"
                        class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>

                    </a>
                </li>

                {{-- User --}}
                <li class="nav-item">
                    <a href="{{ url('/user') }}"
                        class="nav-link {{ request()->is('user*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-users"></i>
                        <p>User</p>

                    </a>
                </li>

                {{-- Penerima --}}
                <li class="nav-item">
                    <a href="{{ url('/penerima') }}"
                        class="nav-link {{ request()->is('penerima*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-user-check"></i>
                        <p>Penerima</p>

                    </a>
                </li>

                {{-- Pengajuan --}}
                <li class="nav-item">
                    <a href="{{ url('/pengajuan') }}"
                        class="nav-link {{ request()->is('pengajuan*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Pengajuan</p>

                    </a>
                </li>

                {{-- Verifikasi --}}
                <li class="nav-item">
                    <a href="{{ url('/verifikasi') }}"
                        class="nav-link {{ request()->is('verifikasi*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>Verifikasi</p>

                    </a>
                </li>

                {{-- Penyaluran --}}
                <li class="nav-item">
                    <a href="{{ url('/penyaluran') }}"
                        class="nav-link {{ request()->is('penyaluran*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-hand-holding-heart"></i>
                        <p>Penyaluran</p>

                    </a>
                </li>

                {{-- Berita --}}
                <li class="nav-item">
                    <a href="{{ url('/berita') }}"
                        class="nav-link {{ request()->is('berita*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Berita</p>

                    </a>
                </li>

                {{-- Komentar --}}
                <li class="nav-item">
                    <a href="{{ url('/komentar') }}"
                        class="nav-link {{ request()->is('komentar*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-comments"></i>
                        <p>Komentar</p>

                    </a>
                </li>

                {{-- Laporan --}}
                <li class="nav-item">
                    <a href="{{ url('/laporan') }}"
                        class="nav-link {{ request()->is('laporan*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Laporan</p>

                    </a>
                <li class="nav-item mt-4">

                    <form action="{{ url('/logout') }}"
                        method="POST">

                        @csrf

                        <button type="submit"
                            class="nav-link btn btn-link text-danger w-100 text-left">

                            <i class="nav-icon fas fa-sign-out-alt"></i>

                            <p>Logout</p>

                        </button>

                    </form>

                </li>

        </nav>

    </div>

</aside>