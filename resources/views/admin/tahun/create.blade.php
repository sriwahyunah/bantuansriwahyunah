@extends('layouts.app')

@section('title', 'Tambah Tahun')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">
            <h1>Tambah Tahun</h1>
        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">
                        Form Tambah Tahun
                    </h3>
                </div>

                <form action="{{ route('tahun.store') }}"
                    method="POST">

                    @csrf

                    <div class="card-body">

                        <div class="form-group">

                            <label>Tahun</label>

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