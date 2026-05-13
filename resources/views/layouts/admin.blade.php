<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- FONT AWESOME --}}
    <link rel="stylesheet"
          href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    {{-- ADMIN LTE --}}
    <link rel="stylesheet"
          href="{{ asset('dist/css/adminlte.min.css') }}">

    {{-- GOOGLE FONT --}}
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

    {{-- CUSTOM STYLE --}}
    <style>

        /* =========================================
           BODY
        ========================================= */

        body{
            font-family: 'Poppins', sans-serif;
            background: #f4f6f9;
        }

        /* =========================================
           NAVBAR
        ========================================= */

        .main-header{
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,.05);
        }

        /* =========================================
           SIDEBAR
        ========================================= */

        .main-sidebar{
            background: #2f3640 !important;
            box-shadow: 2px 0 15px rgba(0,0,0,.08);
        }

        /* =========================================
           BRAND
        ========================================= */

        .brand-link{
            height: 70px;
            border-bottom: 1px solid rgba(255,255,255,.06);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-text{
            color: white !important;
            font-size: 24px;
            font-weight: 600;
            letter-spacing: .5px;
        }

        /* =========================================
           SIDEBAR CONTENT
        ========================================= */

        .sidebar{
            padding: 12px;
        }

        /* =========================================
           USER PANEL
        ========================================= */

        .user-panel{
            padding-bottom: 18px;
            margin-bottom: 15px;
            border-bottom: 1px solid rgba(255,255,255,.06);
        }

        .sidebar-user-circle{
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: white;
            color: #2f3640;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
        }

        .sidebar-user-name{
            color: white;
            font-size: 16px;
            font-weight: 600;
        }

        /* =========================================
           MENU
        ========================================= */

        .nav-sidebar .nav-item{
            margin-bottom: 6px;
        }

        .nav-sidebar .nav-link{
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            padding: 0 15px;
            transition: .3s;
        }

        .nav-sidebar .nav-link i{
            width: 22px;
            font-size: 16px;
            margin-right: 10px;
        }

        .nav-sidebar .nav-link p{
            margin: 0;
            font-size: 15px;
            font-weight: 500;
        }

        /* ACTIVE MENU */

        .nav-sidebar .nav-link.active{
            background: #007bff !important;
            color: white !important;
            box-shadow: 0 4px 12px rgba(0,123,255,.3);
        }

        /* HOVER MENU */

        .nav-sidebar .nav-link:hover{
            background: rgba(255,255,255,.05);
            color: white !important;
        }

        /* =========================================
           HEADER MENU
        ========================================= */

        .nav-header{
            color: #95a5a6 !important;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-top: 18px;
            margin-bottom: 10px;
            padding-left: 10px !important;
        }

        /* =========================================
           LOGOUT
        ========================================= */

        .nav-logout{
            background: rgba(255,0,0,.08);
            color: #ff7675 !important;
        }

        .nav-logout:hover{
            background: rgba(255,0,0,.15) !important;
        }

        /* =========================================
           CONTENT
        ========================================= */

        .content-wrapper{
            background: #f4f6f9 !important;
            min-height: 100vh;
            padding: 20px;
        }

        /* =========================================
           CARD
        ========================================= */

        .card{
            border: none;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,.05);
        }

        .card-header{
            border-bottom: 1px solid #f1f1f1;
            background: white;
            border-radius: 15px 15px 0 0 !important;
        }

        /* =========================================
           FOOTER
        ========================================= */

        .main-footer{
            border-top: none;
            background: white;
            font-size: 14px;
            color: #666;
        }

    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    {{-- NAVBAR --}}
    @include('layouts.components.admin.navbar')

    {{-- SIDEBAR --}}
    @include('layouts.components.admin.sidebar')

    {{-- CONTENT --}}
   <div class="content-wrapper">

        <section class="content">

            <div class="container-fluid">

                @yield('content')

            </div>

        </section>

    </div>

    {{-- FOOTER --}}
    @include('layouts.components.admin.footer')

</div>

{{-- JQUERY --}}
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

{{-- BOOTSTRAP --}}
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{-- ADMIN LTE --}}
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>