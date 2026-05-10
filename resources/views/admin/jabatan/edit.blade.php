@extends('layouts.app')

@section('title', 'Edit Jabatan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Edit Jabatan</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-warning">

                <div class="card-header">
                    <h3 class="card-title">
                        Form Edit Jabatan
                    </h3>
                </div>

                <form action="{{ route('jabatan.update', $jabatan->id) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="form-group">

                            <label>Nama Jabatan</label>

                            <input type="text"
                                   name="nama"
                                   value="{{ $jabatan->nama }}"
                                   class="form-control">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                                class="btn btn-warning">

                            <i class="fas fa-edit"></i>
                            Update

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