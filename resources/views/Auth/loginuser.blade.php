<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Penerima Bantuan</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body{
            background: #f4f6f9;
        }

        .login-box{
            width: 420px;
            margin: 80px auto;
        }

        .card{
            border-radius: 15px;
            overflow: hidden;
        }

        .card-header{
            background: #0d6efd;
            color: white;
            text-align: center;
            padding: 25px;
        }

        .btn-login{
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<div class="login-box">

    <div class="card shadow">

        <div class="card-header">

            <h2>
                <i class="fa-solid fa-user"></i>
                Login Penerima
            </h2>

            <p class="mb-0">
                Website Bantuan Sosial
            </p>

        </div>

        <div class="card-body p-4">

            {{-- ERROR --}}
            @if(session('error'))

                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>

            @endif

            {{-- FORM LOGIN --}}
            <form action="{{ url('/login-penerima') }}"
                  method="POST">

                @csrf

                {{-- EMAIL --}}
                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Masukkan email"
                           required>

                </div>

                {{-- PASSWORD --}}
                <div class="mb-4">

                    <label class="form-label">
                        Password
                    </label>

                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Masukkan password"
                           required>

                </div>

                {{-- BUTTON --}}
                <button type="submit"
                        class="btn btn-primary btn-login">

                    <i class="fa-solid fa-right-to-bracket"></i>
                    Login

                </button>

            </form>

            {{-- KEMBALI --}}
            <div class="text-center mt-4">

                <a href="{{ url('/') }}"
                   class="text-decoration-none">

                    ← Kembali ke Home

                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>