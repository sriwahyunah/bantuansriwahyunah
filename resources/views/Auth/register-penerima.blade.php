@extends('layouts.guest')

@section('title', 'Register Penerima')

@section('content')

<div class="register-box mx-auto mt-4">

    <div class="card card-outline card-primary">

        <div class="card-header text-center">

            <h3>

                REGISTRASI PENERIMA

            </h3>

        </div>

        <div class="card-body">

            <form action="{{ route('register.penerima.store') }}"
                  method="POST">

                @csrf

                <div class="form-group">

                    <label>Nama Lengkap</label>

                    <input type="text"
                           name="nama"
                           class="form-control"
                           required>

                </div>

                <div class="form-group">

                    <label>NIK</label>

                    <input type="text"
                           name="nik"
                           class="form-control"
                           required>

                </div>

                <div class="form-group">

                    <label>Email</label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           required>

                </div>

                <div class="form-group">

                    <label>No HP</label>

                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           required>

                </div>

                <div class="form-group">

                    <label>Alamat</label>

                    <textarea name="alamat"
                              class="form-control"
                              rows="4"
                              required></textarea>

                </div>

                <div class="form-group">

                    <label>Password</label>

                    <input type="password"
                           name="password"
                           class="form-control"
                           required>

                </div>

                <div class="form-group">

                    <label>Konfirmasi Password</label>

                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           required>

                </div>

                <button type="submit"
                        class="btn btn-primary btn-block">

                    Daftar

                </button>

            </form>

        </div>

    </div>

</div>

@endsection