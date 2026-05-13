<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- FONT AWESOME --}}
    <link rel="stylesheet"
          href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    {{-- ADMIN LTE --}}
    <link rel="stylesheet"
          href="{{ asset('dist/css/adminlte.min.css') }}">

    {{-- GOOGLE FONT --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>

        :root{
            --primary: #4f46e5;
            --primary2: #7c3aed;
            --dark: #111827;
            --dark2: #1f2937;
            --white: #ffffff;
            --gray: #94a3b8;
            --bg: #f1f5f9;
        }

        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: var(--bg);
        }

        /* ===============================
           NAVBAR
        =============================== */

        .main-header{
            border: none !important;
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 25px rgba(0,0,0,0.05);
        }

        .main-header .nav-link{
            color: #374151;
            font-size: 18px;
        }

        /* ===============================
           SIDEBAR
        =============================== */

        .main-sidebar{
            background: linear-gradient(180deg, var(--dark), var(--dark2));
            border-top-right-radius: 24px;
            border-bottom-right-radius: 24px;
            overflow: hidden;
        }

        .brand-link{
            border-bottom: 1px solid rgba(255,255,255,0.08) !important;
            padding: 22px 20px;
        }

        .brand-text{
            color: white !important;
            font-size: 24px;
            font-weight: 800 !important;
            letter-spacing: 1px;
        }

        .user-panel{
            border-bottom: 1px solid rgba(255,255,255,0.08);
            padding-bottom: 20px !important;
        }

        .user-panel img{
            width: 45px;
            height: 45px;
        }

        .user-panel .info a{
            color: white !important;
            font-weight: 600;
            font-size: 15px;
        }

        /* ===============================
           SIDEBAR MENU
        =============================== */

        .nav-sidebar{
            margin-top: 15px;
        }

        .nav-sidebar .nav-item{
            margin-bottom: 10px;
        }

        .nav-sidebar .nav-link{
            border-radius: 14px;
            margin: 0 12px;
            padding: 14px 16px;
            color: #d1d5db;
            transition: all .3s ease;
            font-weight: 500;
        }

        .nav-sidebar .nav-link i{
            font-size: 17px;
        }

        .nav-sidebar .nav-link:hover{
            background: rgba(255,255,255,0.08);
            color: white;
            transform: translateX(6px);
        }

        .nav-sidebar .nav-link.active{
            background: linear-gradient(135deg, var(--primary), var(--primary2));
            color: white;
            box-shadow: 0 10px 25px rgba(79,70,229,0.35);
        }

        /* ===============================
           CONTENT
        =============================== */

        .content-wrapper{
            background: var(--bg);
        }

        .content{
            min-height: 100vh;
        }

        .page-header{
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            border-radius: 24px;
            padding: 35px;
            color: white;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 35px rgba(79,70,229,0.25);
        }

        .page-header::before{
            content: '';
            position: absolute;
            width: 250px;
            height: 250px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            top: -80px;
            right: -80px;
        }

        .page-header h2{
            font-weight: 700;
            margin-bottom: 10px;
        }

        .page-header p{
            margin: 0;
            opacity: .9;
        }

        /* ===============================
           CARD
        =============================== */

        .modern-card{
            background: white;
            border-radius: 24px;
            padding: 25px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: .3s;
        }

        .modern-card:hover{
            transform: translateY(-5px);
        }

        .modern-card .icon{
            width: 65px;
            height: 65px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: white;
            margin-bottom: 20px;
        }

        .bg-blue{
            background: linear-gradient(135deg,#3b82f6,#2563eb);
        }

        .bg-green{
            background: linear-gradient(135deg,#10b981,#059669);
        }

        .bg-orange{
            background: linear-gradient(135deg,#f59e0b,#d97706);
        }

        .bg-red{
            background: linear-gradient(135deg,#ef4444,#dc2626);
        }

        .modern-card h3{
            font-size: 34px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .modern-card p{
            color: #64748b;
            margin: 0;
        }

        /* ===============================
           TABLE
        =============================== */

        .table-card{
            background: white;
            border-radius: 24px;
            border: none;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .table-header{
            padding: 22px 25px;
            border-bottom: 1px solid #f1f5f9;
            font-size: 18px;
            font-weight: 600;
        }

        .table{
            margin: 0;
        }

        .table thead th{
            border-top: none;
            border-bottom: 1px solid #f1f5f9;
            color: #64748b;
            font-weight: 600;
            padding: 18px;
        }

        .table td{
            padding: 18px;
            vertical-align: middle;
        }

        /* ===============================
           BUTTON
        =============================== */

        .btn-modern{
            border: none;
            border-radius: 14px;
            padding: 12px 20px;
            font-weight: 600;
            transition: .3s;
        }

        .btn-modern:hover{
            transform: translateY(-2px);
        }

        /* ===============================
           BADGE
        =============================== */

        .badge-modern{
            padding: 8px 15px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
        }

        /* ===============================
           SCROLLBAR
        =============================== */

        ::-webkit-scrollbar{
            width: 8px;
        }

        ::-webkit-scrollbar-thumb{
            background: #cbd5e1;
            border-radius: 20px;
        }

    </style>

    @stack('styles')

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    {{-- NAVBAR --}}
    <nav class="main-header navbar navbar-expand navbar-light">

        <ul class="navbar-nav">

            <li class="nav-item">

                <a class="nav-link"
                   data-widget="pushmenu"
                   href="#">

                    <i class="fas fa-bars"></i>

                </a>

            </li>

        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">

                <a class="nav-link" data-toggle="dropdown" href="#">

                    <i class="far fa-bell"></i>

                </a>

            </li>

            <li class="nav-item dropdown ml-2">

                <a class="nav-link" data-toggle="dropdown" href="#">

                    <i class="far fa-user-circle fa-lg"></i>

                </a>

                <div class="dropdown-menu dropdown-menu-right">

                    <a href="#" class="dropdown-item">
                        <i class="fas fa-user mr-2"></i>
                        Profile
                    </a>

                    <div class="dropdown-divider"></div>

                    <a href="#" class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </a>

                </div>

            </li>

        </ul>

    </nav>

    {{-- SIDEBAR --}}
    <aside class="main-sidebar elevation-4">

        {{-- LOGO --}}
        <a href="#" class="brand-link text-center">

            <span class="brand-text">
                BANTUAN UNA
            </span>

        </a>

        <div class="sidebar">

            {{-- USER --}}
            <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">

                <div class="image">

                    <img src="https://ui-avatars.com/api/?name=Admin&background=4f46e5&color=fff"
                         class="img-circle elevation-2"
                         alt="User">

                </div>

                <div class="info">

                    <a href="#" class="d-block">
                        Administrator
                    </a>

                    <small class="text-success">
                        ● Online
                    </small>

                </div>

            </div>

            {{-- MENU --}}
            <nav class="mt-2">

                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview"
                    role="menu">

                    <li class="nav-item">

                        <a href="/admin/dashboard" class="nav-link active">

                            <i class="nav-icon fas fa-home"></i>

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

                            <i class="nav-icon fas fa-chart-pie"></i>

                            <p>Laporan</p>

                        </a>

                    </li>

                </ul>

            </nav>

        </div>

    </aside>

    {{-- CONTENT --}}
    <div class="content-wrapper">

        <section class="content pt-4">

            <div class="container-fluid">

                {{-- HEADER --}}
                <div class="page-header">

                    <h2>
                        Selamat Datang Admin 👋
                    </h2>

                    <p>
                        Kelola sistem bantuan sosial dengan mudah dan cepat
                    </p>

                </div>

                {{-- CONTENT --}}
                @yield('content')

            </div>

        </section>

    </div>

</div>

{{-- JQUERY --}}
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

{{-- BOOTSTRAP --}}
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{-- ADMIN LTE --}}
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

@stack('scripts')

</body>
</html>