<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Penerima Bantuan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 p-0">

            @include('layouts.user.sidebarpetugas')

        </div>

        <div class="col-md-10">

            @include('layouts.user.navbar')

            <div class="p-4">

                @yield('content')

            </div>

        </div>

    </div>

</div>

</body>
</html>