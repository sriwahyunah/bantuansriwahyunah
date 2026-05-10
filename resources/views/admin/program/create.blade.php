@extends('layouts.app')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Tambah Program Bantuan</h1>
                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-body">

                    <form action="{{ route('program.store') }}"
                          method="POST">

                        @csrf

                        <div class="form-group">

                            <label>Nama Program</label>

                            <input type="text"
                                   name="nama_program"
                                   class="form-control"
                                   placeholder="Masukkan nama program">

                        </div>

                        <button type="submit"
                                class="btn btn-success">

                            Simpan
                        </button>

                        <a href="{{ route('program.index') }}"
                           class="btn btn-secondary">

                            Kembali
                        </a>

                    </form>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection