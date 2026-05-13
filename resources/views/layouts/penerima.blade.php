<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

    @include('components.penerima.navbar')

    @include('components.penerima.sidebar')

    <div class="content-wrapper">

        <section class="content-header">

            <div class="container-fluid">

                <h1>@yield('title')</h1>

            </div>

        </section>

        <section class="content">

            <div class="container-fluid">

                @yield('content')

            </div>

        </section>

    </div>

    @include('components.penerima.footer')

</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>

</html>