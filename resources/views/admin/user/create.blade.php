@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Tambah User</h1>
                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">Form Tambah User</h3>
                </div>

                <form action="{{ route('user.store') }}"
                      method="POST">

                    @csrf

                    <div class="card-body">

                        <div class="form-group">

                            <label>Nama</label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="Masukkan nama">

                        </div>

                        <div class="form-group">

                            <label>Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Masukkan email">

                        </div>

                        <div class="form-group">

                            <label>Password</label>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Masukkan password">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                                class="btn btn-primary">

                            <i class="fas fa-save"></i>
                            Simpan

                        </button>

                        <a href="{{ route('user.index') }}"
                           class="btn btn-secondary">

                            Kembali

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </section>

</div>

@endsection