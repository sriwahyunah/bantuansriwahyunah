<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">

    {{-- LEFT --}}
    <ul class="navbar-nav">

        <li class="nav-item">

            <a class="nav-link"
               data-widget="pushmenu"
               href="#"
               role="button">

                <i class="fas fa-bars"></i>

            </a>

        </li>

    </ul>

    {{-- RIGHT --}}
    <ul class="navbar-nav ms-auto">

        <li class="nav-item dropdown">

            <a class="nav-link"
               data-bs-toggle="dropdown"
               href="#">

                <i class="fas fa-user-circle me-1"></i>

                Penerima

            </a>

            <div class="dropdown-menu dropdown-menu-end">

                <a href="#"
                   class="dropdown-item">

                    <i class="fas fa-user me-2"></i>

                    Profil

                </a>

                <div class="dropdown-divider"></div>

                <form action="{{ route('logout') }}"
                      method="POST">

                    @csrf

                    <button type="submit"
                            class="dropdown-item text-danger">

                        <i class="fas fa-sign-out-alt me-2"></i>

                        Logout

                    </button>

                </form>

            </div>

        </li>

    </ul>

</nav>