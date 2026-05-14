<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Penerima</title>

    {{-- ADMINLTE --}}
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- GOOGLE FONT --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f1f5f9;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 1100px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            display: flex;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .login-left {
            width: 40%;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .login-left i {
            font-size: 80px;
            margin-bottom: 20px;
            background: white;
            color: #16a34a;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-left h2 {
            font-size: 35px;
            margin-bottom: 15px;
        }

        .login-left p {
            line-height: 28px;
        }

        .login-right {
            width: 60%;
            padding: 60px;
        }

        .login-right h1 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .login-right h1 span {
            color: #16a34a;
        }

        .subtitle {
            color: #6b7280;
            margin-bottom: 35px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
        }

        .input-box {
            position: relative;
        }

        .input-box input {
            width: 100%;
            height: 60px;
            border-radius: 15px;
            border: 2px solid #e5e7eb;
            padding: 0 55px;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
        }

        .input-box input:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.15);
        }

        .input-box i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
        }

        .left-icon {
            left: 20px;
        }

        .right-icon {
            right: 20px;
            cursor: pointer;
        }

        .btn-login {
            width: 100%;
            height: 60px;
            border: none;
            border-radius: 15px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: white;
            font-size: 18px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #9ca3af;
            font-size: 14px;
        }

        .alert-danger {
            border-radius: 12px;
        }

        @media(max-width:900px) {

            .login-container {
                flex-direction: column;
            }

            .login-left,
            .login-right {
                width: 100%;
            }

            .login-right {
                padding: 40px 25px;
            }
        }
    </style>

</head>

<body>

    <div class="login-container">

        {{-- LEFT --}}
        <div class="login-left">

            <i class="fa-solid fa-user-shield"></i>

            <h2>Selamat Datang</h2>

            <p>
                Silahkan login menggunakan username dan password
                untuk masuk ke sistem penerima bantuan.
            </p>

        </div>

        {{-- RIGHT --}}
        <div class="login-right">

            <h1>Login <span>Penerima</span></h1>

            <p class="subtitle">
                Masukkan username dan password Anda
            </p>

            {{-- ERROR --}}
            @if(session('error'))

            <div class="alert alert-danger">
                {{ session('error') }}
            </div>

            @endif

            <form action="{{ route('penerima.login') }}" method="POST">

                @csrf

                {{-- NIK --}}
                <div class="form-group">

                    <label>NIK</label>

                    <div class="input-box">

                        <i class="fa-solid fa-id-card left-icon"></i>

                        <input type="text"
                            name="nik"
                            placeholder="Masukkan NIK"
                            required>

                    </div>

                </div>
                {{-- USERNAME --}}
                <div class="form-group">

                    <label>Username</label>

                    <div class="input-box">

                        <i class="fa-solid fa-user left-icon"></i>

                        <input type="text"
                            name="username"
                            placeholder="Masukkan username"
                            required>

                    </div>

                </div>

                {{-- PASSWORD --}}
                <div class="form-group">

                    <label>Password</label>

                    <div class="input-box">

                        <i class="fa-solid fa-lock left-icon"></i>

                        <input type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                            required>

                        <i class="fa-solid fa-eye right-icon"
                            id="togglePassword"></i>

                    </div>

                </div>

                <button type="submit" class="btn-login">

                    <i class="fa-solid fa-right-to-bracket"></i>
                    Login

                </button>

            </form>

            <div class="footer">
                © 2026 Sistem Bantuan
            </div>

        </div>

    </div>

    <script>
        const togglePassword =
            document.getElementById('togglePassword');

        const password =
            document.getElementById('password');

        togglePassword.addEventListener('click', function() {

            const type =
                password.getAttribute('type') === 'password' ?
                'text' :
                'password';

            password.setAttribute('type', type);

            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');

        });
    </script>

</body>

</html>