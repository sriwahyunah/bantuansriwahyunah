@extends('layouts.app')

@section('title', 'Tambah Jabatan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Tambah Jabatan</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">
                        Form Tambah Jabatan
                    </h3>
                </div>

                <form action="{{ route('jabatan.store') }}"
                      method="POST">

                    @csrf

                    <div class="card-body">

                        <div class="form-group">

                            <label>Nama Jabatan</label>

                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   placeholder="Masukkan jabatan">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                                class="btn btn-primary">

                            <i class="fas fa-save"></i>
                            Simpan

                        </button>

                        <a href="{{ route('jabatan.index') }}"
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