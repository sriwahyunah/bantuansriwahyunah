<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANTUANUNA</title>

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AdminLTE -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <style>

        body{
            font-family: 'Poppins', sans-serif;
        }

        /* Background */
        .content-wrapper{
            background: #f4f6f9;
        }

        /* Sidebar */
        .main-sidebar{
            background: #2f3542 !important;
        }

        /* Brand */
        .brand-link{
            background: #2f3542 !important;
            border-bottom: 1px solid #485460 !important;
            text-align: center;
            padding: 18px;
        }

        .brand-text{
            color: white !important;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* User Panel */
        .user-panel{
            border-bottom: 1px solid #485460 !important;
            padding-bottom: 15px;
        }

        .user-panel .info a{
            color: white !important;
            font-size: 16px;
            font-weight: 600;
        }

        /* Sidebar Menu */
        .nav-sidebar{
            margin-top: 15px;
        }

        .nav-sidebar .nav-item{
            margin-bottom: 8px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .nav-sidebar .nav-link{
            color: #dfe4ea !important;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        /* Hover */
        .nav-sidebar .nav-link:hover{
            background: rgba(255,255,255,0.08) !important;
            color: white !important;
        }

        /* Active */
        .nav-sidebar .nav-link.active{
            background: linear-gradient(90deg,#1e90ff,#3742fa) !important;
            color: white !important;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Icon */
        .nav-sidebar .nav-icon{
            font-size: 17px !important;
        }

        /* Treeview */
        .nav-treeview{
            padding-left: 12px;
        }

        .nav-treeview .nav-link{
            font-size: 15px;
            padding: 10px 15px;
        }

        /* Navbar */
        .main-header{
            border: none !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .navbar{
            background: white !important;
        }

        /* Footer */
        .main-footer{
            border-top: 1px solid #ddd;
            font-size: 14px;
            background: white;
        }

        /* Card */
        .card{
            border: none;
            border-radius: 15px;
        }

        .small-box{
            border-radius: 15px;
        }

    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <!-- Left Navbar -->
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

        <!-- Right Navbar -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">

                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-user-circle"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                    <a href="#" class="dropdown-item">
                        <i class="fas fa-user mr-2"></i>
                        Profile
                    </a>

                    <div class="dropdown-divider"></div>

                    <a href="/logout" class="dropdown-item">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </a>

                </div>

            </li>

        </ul>

    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar elevation-4">

        <!-- Brand -->
        <a href="/dashboard" class="brand-link">

            <span class="brand-text">
                BANTUANUNA
            </span>

        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- User Panel -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">

                <div class="image">

                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                         class="img-circle elevation-2"
                         alt="User Image"
                         style="width:45px;height:45px;">

                </div>

                <div class="info">

                    <a href="#" class="d-block">
                        Administrator
                    </a>

                    <small style="color:#ced6e0;">
                        Super Admin
                    </small>

                </div>

            </div>

            <!-- Menu -->
            <nav class="mt-2">

                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview"
                    role="menu"
                    data-accordion="false">

                    <!-- Dashboard -->
                    <li class="nav-item">

                        <a href="/dashboard"
                           class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">

                            <i class="nav-icon fas fa-home"></i>

                            <p>Dashboard</p>

                        </a>

                    </li>

                    <!-- Master Data -->
                    <li class="nav-item has-treeview">

                        <a href="#"
                           class="nav-link">

                            <i class="nav-icon fas fa-database"></i>

                            <p>
                                Master Data
                                <i class="right fas fa-angle-left"></i>
                            </p>

                        </a>

                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="/penerima" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Penerima</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/jabatan" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Jabatan</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/kategori" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kategori Bantuan</p>
                                </a>
                            </li>

                        </ul>

                    </li>

                    <!-- Pengajuan -->
                    <li class="nav-item">

                        <a href="/pengajuan"
                           class="nav-link">

                            <i class="nav-icon fas fa-file-alt"></i>

                            <p>Pengajuan</p>

                        </a>

                    </li>

                    <!-- Logout -->
                    <li class="nav-item">

                        <a href="/logout"
                           class="nav-link">

                            <i class="nav-icon fas fa-sign-out-alt"></i>

                            <p>Logout</p>

                        </a>

                    </li>

                </ul>

            </nav>

        </div>

    </aside>

    <!-- Content -->
    <div class="content-wrapper">

        <section class="content pt-3">

            <div class="container-fluid">

                @yield('content')

            </div>

        </section>

    </div>

    <!-- Footer -->
    <footer class="main-footer">

        <strong>
            Copyright &copy; 2026
        </strong>

        Sistem Bantuan UNA

    </footer>

</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>