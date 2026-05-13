<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- LEFT -->
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

    <!-- RIGHT -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">

            <a class="nav-link"
               data-toggle="dropdown"
               href="#">
                <i class="far fa-user"></i>
                <span class="ml-1">User</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">

                <div class="dropdown-item text-center">
                    <strong>Admin</strong>
                </div>

                <div class="dropdown-divider"></div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </form>

            </div>

        </li>

    </ul>

</nav>