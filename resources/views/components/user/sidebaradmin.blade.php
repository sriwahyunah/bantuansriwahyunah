<aside class="main-sidebar sidebar-dark-primary elevation-4">

    {{-- LOGO --}}
    <a href="{{ url('/dashboard') }}"
       class="brand-link">

        <span class="brand-text font-weight-bold ml-2">
            SIMPEMBAS
        </span>

    </a>

    {{-- SIDEBAR --}}
    <div class="sidebar">

        {{-- USER --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">

                <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                     class="img-circle elevation-2"
                     alt="User Image">

            </div>

            <div class="info">

                <a href="#"
                   class="d-block">

                    User

                </a>

            </div>

        </div>

        {{-- MENU --}}
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                {{-- DASHBOARD --}}
                <li class="nav-item">

                    <a href="{{ url('/dashboard') }}"
                       class="nav-link">

                        <i class="nav-icon fas fa-home"></i>

                        <p>Dashboard</p>

                    </a>

                </li>

                {{-- PENERIMA --}}
                <li class="nav-item">

                    <a href="{{ url('/penerima') }}"
                       class="nav-link active">

                        <i class="nav-icon fas fa-users"></i>

                        <p>Penerima</p>

                    </a>

                </li>

            </ul>

        </nav>

    </div>

</aside>