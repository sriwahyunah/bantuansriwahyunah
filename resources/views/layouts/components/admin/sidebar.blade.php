<aside class="main-sidebar sidebar-dark-primary elevation-4">

    {{-- Logo --}}
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light ml-2">
            Bantuan UNA
        </span>
    </a>

    {{-- Sidebar --}}
    <div class="sidebar">

        {{-- User --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://ui-avatars.com/api/?name=Admin"
                     class="img-circle elevation-2"
                     alt="User Image">
            </div>

            <div class="info">
                <a href="#" class="d-block">
                    Admin
                </a>
            </div>
        </div>

        {{-- Menu --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu">

                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/user" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>User</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/penerima" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>Penerima</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/pengajuan" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Pengajuan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/laporan" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Laporan</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</aside>