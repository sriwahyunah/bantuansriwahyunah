<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-5">

    <div class="card">

        <div class="card-body">

            <h1>Dashboard Admin</h1>

            <p>Login berhasil.</p>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button class="btn btn-danger">
                    Logout
                </button>
            </form>

        </div>
    </div>

</div>

</body>
</html>