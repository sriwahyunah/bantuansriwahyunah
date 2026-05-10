<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>
        @yield('title') | BANTUANUNA
    </title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
          href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- ADMIN LTE -->
    <link rel="stylesheet"
          href="{{ asset('dist/css/adminlte.min.css') }}">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

    <!-- CUSTOM STYLE -->
    <style>

        body{
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
        }

        .main-sidebar{
            background: #2f3542;
        }

        .brand-link{
            background: #1e272e;
            border-bottom: 1px solid #485460 !important;
        }

        .brand-text{
            font-weight: 700;
            color: #ffffff !important;
        }

        .nav-sidebar .nav-link{
            border-radius: 6px;
            margin-bottom: 5px;
        }

        .nav-sidebar .nav-link.active{
            background-color: #007bff !important;
        }

        .content-wrapper{
            background-color: #f4f6f9;
        }

        .card{
            border-radius: 10px;
            border: none;
        }

        .card-header{
            border-bottom: 1px solid #eeeeee;
        }

        .btn{
            border-radius: 6px;
        }

        .table td,
        .table th{
            vertical-align: middle !important;
        }

        .table thead th{
            border-bottom: none;
        }

        .content-header h1{
            font-weight: 700;
        }

    </style>

    @stack('styles')

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- NAVBAR -->
    @include('components.user.navbar')

    <!-- SIDEBAR -->
    @include('components.user.sidebaradmin')

    <!-- CONTENT WRAPPER -->
    <div class="content-wrapper">

        <!-- HEADER -->
        <section class="content-header">

            <div class="container-fluid">

                <div class="row mb-3">

                    <div class="col-sm-6">

                        <h1 class="m-0">
                            @yield('title')
                        </h1>

                    </div>

                </div>

            </div>

        </section>

        <!-- MAIN CONTENT -->
        <section class="content">

            <div class="container-fluid">

                @yield('content')

            </div>

        </section>

    </div>

    <!-- FOOTER -->
    @include('components.user.footer')

</div>

<!-- JQUERY -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- BOOTSTRAP -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- ADMIN LTE -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

@stack('scripts')

</body>
</html>