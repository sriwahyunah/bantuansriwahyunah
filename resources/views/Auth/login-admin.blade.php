<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <!-- ADMIN LTE CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        body.login-page{
            background: #f4f6f9;
        }

        .login-box{
            width: 380px;
        }

        .card{
            border-radius: 12px;
            overflow: hidden;
        }

        .login-logo a{
            color: #343a40;
            font-weight: bold;
        }

        .btn-primary{
            border-radius: 8px;
        }

        .form-control{
            border-radius: 8px;
        }

    </style>
</head>

<body class="hold-transition login-page">

<div class="login-box">

    <!-- LOGO -->
    <div class="login-logo">
        <a href="#">
            <b>ADMIN</b> PANEL
        </a>
    </div>

    <!-- CARD -->
    <div class="card shadow-sm">

        <div class="card-body login-card-body">

            <p class="login-box-msg">
                Sign in to start your session
            </p>

            {{-- ERROR --}}
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <!-- FORM -->
            <form action="{{ route('login.process') }}"
                  method="POST">

                @csrf

                <!-- EMAIL -->
                <div class="input-group mb-3">

                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Email"
                           required>

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
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
                <button type="submit"
                        class="btn btn-primary btn-block">

                    <i class="fas fa-sign-in-alt"></i>
                    Login

                </button>

            </form>

        </div>

    </div>

</div>

<!-- JQUERY -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

<!-- ADMIN LTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>