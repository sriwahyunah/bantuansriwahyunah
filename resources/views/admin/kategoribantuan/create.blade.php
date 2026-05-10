@extends('layouts.appuser')

@section('title', 'Tambah Kategori Bantuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>Tambah Kategori Bantuan</h1>
        </div>
    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">
                        Form Tambah Kategori
                    </h3>
                </div>

                <form action="{{ route('kategoribantuan.store') }}"
                    method="POST">

                    @csrf

                    <div class="card-body">

                        <div class="form-group">

                            <label>Nama Kategori</label>

                            <input type="text"
                                name="nama"
                                class="form-control">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                            class="btn btn-primary">

                            Simpan

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>

</div>

@endsection