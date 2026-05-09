<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>

        body{
            background: #eef2f7;
        }

        .sidebar{
            min-height: 100vh;
            background: #0d6efd;
        }

        .sidebar a{
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 5px;
        }

        .sidebar a:hover{
            background: rgba(255,255,255,0.2);
        }

    </style>

</head>

<body>

<div class="container-fluid">

    <div class="row">

        {{-- SIDEBAR --}}
        <div class="col-md-2 sidebar p-3">

            <h4 class="text-white mb-4">

                <i class="fa-solid fa-user"></i>
                User Panel

            </h4>

            <a href="/">

                <i class="fa-solid fa-house"></i>
                Home

            </a>

            <a href="/program">

                <i class="fa-solid fa-list"></i>
                Program

            </a>

            <a href="/kategori">

                <i class="fa-solid fa-layer-group"></i>
                Kategori

            </a>

            <a href="/kontak">

                <i class="fa-solid fa-envelope"></i>
                Kontak

            </a>

            <a href="/logout">

                <i class="fa-solid fa-right-from-bracket"></i>
                Logout

            </a>

        </div>

        {{-- CONTENT --}}
        <div class="col-md-10">

            {{-- NAVBAR --}}
            @include('layouts.user.navbar')

            <div class="p-4">

                @yield('content')

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>