<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8">

        <span class="brand-text font-weight-light">
            BANTUAN
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                    class="img-circle elevation-2"
                    alt="User Image">
            </div>

            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name ?? 'Administrator' }}
                </a>
            </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                <!-- DASHBOARD -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->is('admin/dashboard*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-tachometer-alt"></i>

                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- MASTER DATA -->
                <li class="nav-header">MASTER DATA</li>

                <li class="nav-item has-treeview">

                    <a href="#" class="nav-link">

                        <i class="nav-icon fas fa-database"></i>

                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('user.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>User</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('jabatan.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Jabatan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pangkat.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Pangkat</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('status.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Status</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('tahun.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Tahun</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('penerima.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Penerima</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('kategori-bantuan.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Kategori Bantuan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('jenis-bantuan.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Jenis Bantuan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('status-pengajuan.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Status Pengajuan</p>
                            </a>
                        </li>

                    </ul>

                </li>

                <!-- TRANSAKSI -->
                <li class="nav-header">TRANSAKSI</li>

                <li class="nav-item has-treeview">

                    <a href="#" class="nav-link">

                        <i class="nav-icon fas fa-exchange-alt"></i>

                        <p>
                            Transaksi
                            <i class="fas fa-angle-left right"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('pengajuan.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Pengajuan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('verifikasi.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Verifikasi</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('penyaluran.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Penyaluran</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('bukti-penyaluran.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Bukti Penyaluran</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('berita.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Berita</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('komentar.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Komentar</p>
                            </a>
                        </li>

                    </ul>

                </li>

                <!-- LAPORAN -->
                <li class="nav-header">LAPORAN</li>

                <li class="nav-item has-treeview">

                    <a href="#" class="nav-link">

                        <i class="nav-icon fas fa-file-alt"></i>

                        <p>
                            Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('laporan.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Laporan Utama</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('laporan-bulanan.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Laporan Bulanan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('laporan-tahunan.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Laporan Tahunan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('laporan-penyaluran.index') }}"
                                class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Laporan Penyaluran</p>
                            </a>
                        </li>

                    </ul>

                <li class="nav-item">

                    <a href="{{ route('bantuan.index') }}"
                        class="nav-link">

                        <i class="nav-icon fas fa-hand-holding-heart"></i>

                        <p>

                            Bantuan

                        </p>

                    </a>

                </li>
                
                </li>
                <li class="nav-item">

                    <a href="{{ route('jenis-bantuan.index') }}"
                        class="nav-link {{ request()->routeIs('jenis-bantuan.*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-tags"></i>

                        <p>

                            Jenis Bantuan

                        </p>

                    </a>

                </li>

                <!-- LOGOUT -->
                <li class="nav-header">ACCOUNT</li>

                <li class="nav-item">

                    <form action="{{ route('logout') }}" method="POST">

                        @csrf

                        <button type="submit"
                            class="nav-link btn btn-danger border-0 w-100 text-left">

                            <i class="nav-icon fas fa-sign-out-alt"></i>

                            <p>Logout</p>

                        </button>

                    </form>

                </li>

            </ul>

        </nav>

    </div>

</aside>