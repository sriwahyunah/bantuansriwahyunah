<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- AdminLTE --}}
    <link rel="stylesheet"
          href="{{ asset('dist/css/adminlte.min.css') }}">

    <style>

        body{
            background-color: #f4f7fb;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        main{
            flex: 1;
        }

        /* NAVBAR */
        .navbar-custom{
            background: linear-gradient(90deg,#0d6efd,#3b82f6);
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar-custom .navbar-brand{
            color: white;
            font-size: 30px;
            font-weight: 700;
            transition: .3s;
        }

        .navbar-custom .navbar-brand:hover{
            transform: scale(1.02);
        }

        .navbar-custom .nav-link{
            color: white !important;
            margin-left: 20px;
            font-weight: 500;
            position: relative;
            transition: .3s;
        }

        .navbar-custom .nav-link:hover{
            transform: translateY(-2px);
            opacity: .95;
        }

        .navbar-custom .nav-link::after{
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 0%;
            height: 2px;
            background: white;
            transition: .3s;
        }

        .navbar-custom .nav-link:hover::after{
            width: 100%;
        }

        /* FOOTER */
        .footer-custom{
            background: white;
            border-top: 1px solid #dee2e6;
            padding: 25px 0;
        }

        .footer-custom strong{
            font-size: 18px;
            color: #0d1b4c;
        }

        /* CARD GLOBAL */
        .card-modern{
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        /* BUTTON GLOBAL */
        .btn-modern{
            border-radius: 12px;
            padding: 12px 20px;
            font-weight: 600;
            transition: .3s;
        }

        .btn-modern:hover{
            transform: translateY(-2px);
        }

        /* FORM */
        .form-control{
            border-radius: 12px;
            min-height: 50px;
            border: 1px solid #dbe2ef;
        }

        .form-control:focus{
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.15rem rgba(13,110,253,.15);
        }

        /* RESPONSIVE */
        @media(max-width: 768px){

            .navbar-custom .navbar-brand{
                font-size: 24px;
            }

            .navbar-custom .nav-link{
                margin-left: 0;
                margin-top: 10px;
            }

        }

    </style>

</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">

        <div class="container">

            {{-- LOGO --}}
            <a class="navbar-brand" href="{{ url('/') }}">

                <i class="fas fa-hand-holding-heart me-2"></i>
                Bantuan Sosial

            </a>

            {{-- TOGGLER --}}
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            {{-- MENU --}}
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    {{-- HOME --}}
                    <li class="nav-item">

                        <a class="nav-link"
                           href="{{ url('/') }}">

                            <i class="fas fa-home me-1"></i>
                            Home

                        </a>

                    </li>

                    {{-- LOGIN USER --}}
                    <li class="nav-item">

                        <a class="nav-link"
                           href="{{ route('login.user') }}">

                            <i class="fas fa-user me-1"></i>
                            Login User

                        </a>

                    </li>

                    {{-- LOGIN PENERIMA --}}
                    <li class="nav-item">

                        <a class="nav-link"
                           href="{{ route('login.penerima') }}">

                            <i class="fas fa-sign-in-alt me-1"></i>
                            Login Penerima

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

    {{-- CONTENT --}}
    <main>

        @yield('content')

    </main>

    {{-- FOOTER --}}
    <footer class="footer-custom text-center mt-5">

        <strong>
            Sistem Bantuan Sosial
        </strong>

        <br>

        <small class="text-muted">
            © {{ date('Y') }} All rights reserved
        </small>

    </footer>

    {{-- JQuery --}}
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    {{-- Bootstrap --}}
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- AdminLTE --}}
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>