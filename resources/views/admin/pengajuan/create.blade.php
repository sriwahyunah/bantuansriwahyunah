@extends('layouts.appuser')

@section('title', 'Tambah Pengajuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>Tambah Pengajuan</h1>
        </div>
    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">
                        Form Pengajuan
                    </h3>
                </div>

                <form action="{{ route('pengajuan.store') }}"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="card-body">

                        <div class="form-group">

                            <label>Penerima</label>

                            <select name="penerima_id"
                                class="form-control">

                            </select>

                        </div>

                        <div class="form-group">

                            <label>Jenis Bantuan</label>

                            <select name="jenis_bantuan_id"
                                class="form-control">

                            </select>

                        </div>

                        <div class="form-group">

                            <label>Upload Berkas</label>

                            <input type="file"
                                name="file"
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