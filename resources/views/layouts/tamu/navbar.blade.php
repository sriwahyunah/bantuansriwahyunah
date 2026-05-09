<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">

    <div class="container">

        {{-- LOGO --}}
        <a class="navbar-brand fw-bold"
           href="{{ url('/') }}">

            <i class="fa-solid fa-hand-holding-heart"></i>
            Bantuan Sosial

        </a>

        {{-- TOGGLE MOBILE --}}
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        {{-- MENU --}}
        <div class="collapse navbar-collapse"
             id="navbarMenu">

            {{-- MENU KIRI --}}
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item mx-1">

                    <a class="nav-link fw-semibold"
                       href="{{ url('/') }}">

                        <i class="fa-solid fa-house"></i>
                        Home

                    </a>

                </li>

                <li class="nav-item mx-1">

                    <a class="nav-link fw-semibold"
                       href="{{ url('/program') }}">

                        <i class="fa-solid fa-list"></i>
                        Program

                    </a>

                </li>

                <li class="nav-item mx-1">

                    <a class="nav-link fw-semibold"
                       href="{{ url('/kategori') }}">

                        <i class="fa-solid fa-layer-group"></i>
                        Kategori

                    </a>

                </li>

                <li class="nav-item mx-1">

                    <a class="nav-link fw-semibold"
                       href="{{ url('/tentang') }}">

                        <i class="fa-solid fa-circle-info"></i>
                        Tentang

                    </a>

                </li>

                <li class="nav-item mx-1">

                    <a class="nav-link fw-semibold"
                       href="{{ url('/kontak') }}">

                        <i class="fa-solid fa-envelope"></i>
                        Kontak

                    </a>

                </li>

                <li class="nav-item mx-1">

                    <a class="nav-link fw-semibold"
                       href="{{ url('/daftarisi') }}">

                        <i class="fa-solid fa-book"></i>
                        Daftar Isi

                    </a>

                </li>

                {{-- BUTTON LOGIN --}}
                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">

                    <a href="{{ url('/login-admin') }}"
                       class="btn btn-light btn-sm fw-bold me-2">

                        <i class="fa-solid fa-user-shield"></i>
                        Admin

                    </a>

                    <a href="{{ url('/login-penerima') }}"
                       class="btn btn-warning btn-sm fw-bold">

                        <i class="fa-solid fa-user"></i>
                        Penerima

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>