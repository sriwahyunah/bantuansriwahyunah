@extends('layouts.app')

@section('title', 'Tambah Pangkat')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Tambah Pangkat</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-success">

                <div class="card-header">
                    <h3 class="card-title">
                        Form Tambah Pangkat
                    </h3>
                </div>

                <form action="{{ route('pangkat.store') }}"
                      method="POST">

                    @csrf

                    <div class="card-body">

                        <div class="form-group">

                            <label>Nama Pangkat</label>

                            <input type="text"
                                   name="nama"
                                   class="form-control">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                                class="btn btn-success">

                            Simpan

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>

</div>

@endsection