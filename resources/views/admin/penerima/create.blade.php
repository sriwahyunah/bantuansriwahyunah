@extends('layouts.admin')

@section('title', 'Tambah Penerima')

@section('content')
resources/views/admin/penerima/create.blade.php
<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Tambah Penerima</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-header bg-primary">

                    <h3 class="card-title">
                        Form Tambah Penerima
                    </h3>

                </div>

                <form action="{{ url('/penerima/store') }}"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Kategori Penerima</label>
                                    <input type="number"
                                        name="id_kategori_penerima"
                                        class="form-control"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text"
                                        name="id_alamat"
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
                                    <label>No KK</label>
                                    <input type="text"
                                        name="kk"
                                        class="form-control"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text"
                                        name="nama"
                                        class="form-control"
                                        required>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text"
                                        name="username"
                                        class="form-control"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password"
                                        name="password"
                                        class="form-control"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text"
                                        name="telepon"
                                        class="form-control"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file"
                                        name="foto"
                                        class="form-control">
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                            class="btn btn-primary">
                            Simpan
                        </button>

                        <a href="{{ url('/penerima') }}"
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