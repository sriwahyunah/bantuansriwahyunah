@extends('layouts.admin')

@section('title', 'Edit Penerima')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Edit Penerima</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-header bg-warning">

                    <h3 class="card-title">

                        Form Edit Penerima

                    </h3>

                </div>

                <form action="{{ route('admin.penerima.update', $penerima->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="form-group">

                            <label>NIK</label>

                            <input type="text"
                                   name="nik"
                                   class="form-control"
                                   value="{{ $penerima->nik }}">

                        </div>

                        <div class="form-group">

                            <label>KK</label>

                            <input type="text"
                                   name="kk"
                                   class="form-control"
                                   value="{{ $penerima->kk }}">

                        </div>

                        <div class="form-group">

                            <label>Nama</label>

                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   value="{{ $penerima->nama }}">

                        </div>

                        <div class="form-group">

                            <label>Username</label>

                            <input type="text"
                                   name="username"
                                   class="form-control"
                                   value="{{ $penerima->username }}">

                        </div>

                        <div class="form-group">

                            <label>Telepon</label>

                            <input type="text"
                                   name="telepon"
                                   class="form-control"
                                   value="{{ $penerima->telepon }}">

                        </div>

                        <div class="form-group">

                            <label>Status Verifikasi</label>

                            <select name="status_verifikasi"
                                    class="form-control">

                                <option value="pending"
                                    {{ $penerima->status_verifikasi == 'pending' ? 'selected' : '' }}>

                                    Pending

                                </option>

                                <option value="verifikasi"
                                    {{ $penerima->status_verifikasi == 'verifikasi' ? 'selected' : '' }}>

                                    Verifikasi

                                </option>

                            </select>

                        </div>

                        <div class="form-group">

                            <label>Status</label>

                            <select name="status"
                                    class="form-control">

                                <option value="aktif"
                                    {{ $penerima->status == 'aktif' ? 'selected' : '' }}>

                                    Aktif

                                </option>

                                <option value="nonaktif"
                                    {{ $penerima->status == 'nonaktif' ? 'selected' : '' }}>

                                    Nonaktif

                                </option>

                            </select>

                        </div>

                        <div class="form-group">

                            <label>Foto</label>

                            <input type="file"
                                   name="foto"
                                   class="form-control">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button class="btn btn-primary">

                            Update

                        </button>

                        <a href="{{ route('admin.penerima.index') }}"
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