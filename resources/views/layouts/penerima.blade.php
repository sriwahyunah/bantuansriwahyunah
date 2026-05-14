<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    {{-- ADMINLTE --}}
    <link rel="stylesheet"
          href="{{ asset('dist/css/adminlte.min.css') }}">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet"
          href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    {{-- NAVBAR --}}
    @include('components.penerima.navbar')

    {{-- SIDEBAR --}}
    @include('components.penerima.sidebar')

    {{-- CONTENT --}}
    <div class="content-wrapper p-3">

        @yield('content')

    </div>

    {{-- FOOTER --}}
    @include('components.penerima.footer')

</div>

{{-- SCRIPT --}}
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>