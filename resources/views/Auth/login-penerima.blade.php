@extends('layouts.guest')

@section('title', 'Login Penerima')

@section('content')

<div class="login-box mx-auto mt-5">

    <div class="card card-outline card-success">

        <div class="card-header text-center">

            <h3>

                LOGIN PENERIMA

            </h3>

        </div>

        <div class="card-body">

            <form action="{{ route('login.penerima.proses') }}"
                  method="POST">

                @csrf

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

                <button type="submit"
                        class="btn btn-success btn-block">

                    Login

                </button>

            </form>

            <hr>

            <a href="{{ route('register.penerima') }}"
               class="btn btn-outline-primary btn-block">

                Registrasi Penerima

            </a>

        </div>

    </div>

</div>

@endsection