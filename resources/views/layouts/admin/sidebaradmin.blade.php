<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- BRAND LOGO -->
    <a href="{{ route('dashboard') }}" class="brand-link">

        <img src="{{ asset('dist/img/AdminLTELogo.png') }}"
             alt="SIMPEMBAS Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">

        <span class="brand-text font-weight-light">
            SIMPEMBAS
        </span>

    </a>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <!-- USER PANEL -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">

                <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                     class="img-circle elevation-2"
                     alt="User Image">

            </div>

            <div class="info">

                <a href="#" class="d-block">
                    Administrator
                </a>

                <small class="text-success">
                    Online
                </small>

            </div>

        </div>


        <!-- SIDEBAR MENU -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                <!-- =========================
                     DASHBOARD
                ========================== -->
                <li class="nav-item">

                    <a href="{{ route('dashboard') }}"
                       class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-tachometer-alt"></i>

                        <p>
                            Dashboard
                        </p>

                    </a>

                </li>


                <!-- =========================
                     MASTER DATA
                ========================== -->
                <li class="nav-header">
                    MASTER DATA
                </li>

                <!-- KATEGORI -->
                <li class="nav-item">

                    <a href="{{ url('/kategori-admin') }}"
                       class="nav-link {{ request()->is('kategori-admin*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-list"></i>

                        <p>
                            Kategori
                        </p>

                    </a>

                </li>

                <!-- PENERIMA -->
                <li class="nav-item">

                    <a href="{{ route('penerima.index') }}"
                       class="nav-link {{ request()->is('penerima*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-users"></i>

                        <p>
                            Penerima Bantuan
                        </p>

                    </a>

                </li>


                <!-- =========================
                     PROGRAM BANTUAN
                ========================== -->
                <li class="nav-header">
                    PROGRAM BANTUAN
                </li>

                <!-- PROGRAM -->
                <li class="nav-item">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-hand-holding-heart"></i>

                        <p>
                            Program Bantuan
                        </p>

                    </a>

                </li>

                <!-- PENGAJUAN -->
                <li class="nav-item">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-file-alt"></i>

                        <p>
                            Pengajuan Bantuan
                        </p>

                    </a>

                </li>

                <!-- VERIFIKASI -->
                <li class="nav-item">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-check-circle"></i>

                        <p>
                            Verifikasi
                        </p>

                    </a>

                </li>

                <!-- PENYALURAN -->
                <li class="nav-item">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-donate"></i>

                        <p>
                            Penyaluran Bantuan
                        </p>

                    </a>

                </li>


                <!-- =========================
                     DONASI
                ========================== -->
                <li class="nav-header">
                    DONASI
                </li>

                <li class="nav-item">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-box-open"></i>

                        <p>
                            Donasi
                        </p>

                    </a>

                </li>


                <!-- =========================
                     PUBLIKASI
                ========================== -->
                <li class="nav-header">
                    PUBLIKASI
                </li>

                <!-- ARTIKEL -->
                <li class="nav-item">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-newspaper"></i>

                        <p>
                            Artikel
                        </p>

                    </a>

                </li>

                <!-- GALERI -->
                <li class="nav-item">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-image"></i>

                        <p>
                            Galeri
                        </p>

                    </a>

                </li>


                <!-- =========================
                     LAPORAN
                ========================== -->
                <li class="nav-header">
                    LAPORAN
                </li>

                <!-- LAPORAN -->
                <li class="nav-item has-treeview">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-print"></i>

                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <a href="#"
                               class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>
                                    Laporan Bantuan
                                </p>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a href="#"
                               class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>
                                    Laporan Donasi
                                </p>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a href="#"
                               class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>
                                    Laporan Pengajuan
                                </p>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a href="#"
                               class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>
                                    Laporan Penerima
                                </p>

                            </a>

                        </li>

                    </ul>

                </li>


                <!-- =========================
                     SETTING
                ========================== -->
                <li class="nav-header">
                    PENGATURAN
                </li>

                <!-- PROFILE -->
                <li class="nav-item">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-user-cog"></i>

                        <p>
                            Profile
                        </p>

                    </a>

                </li>

                <!-- LOGOUT -->
                <li class="nav-item">

                    <form action="{{ route('logout') }}"
                          method="POST">

                        @csrf

                        <button type="submit"
                                class="nav-link btn btn-link text-left w-100 border-0 bg-transparent">

                            <i class="nav-icon fas fa-sign-out-alt text-danger"></i>

                            <p>
                                Logout
                            </p>

                        </button>

                    </form>

                </li>

            </ul>

        </nav>

    </div>

</aside>