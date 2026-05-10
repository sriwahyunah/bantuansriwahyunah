
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin</title>

    <!-- AdminLTE -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
</head>

<body class="hold-transition login-page">

<div class="login-box">

    <!-- LOGO -->
    <div class="login-logo">
        <a href="{{ url('/') }}">
            <b>Bantuan</b>UNA
        </a>
    </div>

    <!-- CARD LOGIN -->
    <div class="card card-outline card-primary">

        <div class="card-header text-center">
            <h3>
                Login Admin
            </h3>
        </div>

        <div class="card-body">

            <p class="login-box-msg">
                Silakan login untuk masuk dashboard
            </p>

            <!-- ERROR -->
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <!-- VALIDATION ERROR -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- FORM LOGIN -->
            <form action="{{ route('login.process') }}"
                  method="POST">

                @csrf

                <!-- USERNAME -->
                <div class="input-group mb-3">

                    <input type="text"
                           name="username"
                           class="form-control"
                           placeholder="Username"
                           value="{{ old('username') }}"
                           required>

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                </div>

                <!-- PASSWORD -->
                <div class="input-group mb-3">

                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Password"
                           required>

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>

                </div>

                <!-- BUTTON -->
                <div class="row">

                    <div class="col-12">

                        <button type="submit"
                                class="btn btn-primary btn-block">
                            <i class="fas fa-sign-in-alt"></i>
                            Login
                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>
```

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">
        Logout
    </button>
</form>

