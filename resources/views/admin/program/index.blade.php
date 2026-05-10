@extends('layouts.app')

@section('content')

<div class="content-wrapper">

    <!-- HEADER -->
    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Program Bantuan</h1>
                </div>

            </div>

        </div>

    </section>

    <!-- CONTENT -->
    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <!-- HEADER CARD -->
                <div class="card-header">

                    <a href="{{ url('/program/create') }}"
                       class="btn btn-primary">

                        <i class="fas fa-plus"></i>
                        Tambah Program

                    </a>

                </div>

                <!-- BODY CARD -->
                <div class="card-body">

                    <table class="table table-bordered table-striped">

                        <thead>

                            <tr>

                                <th width="50">No</th>
                                <th>Nama Program</th>
                                <th width="200">Aksi</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>1</td>

                                <td>
                                    Program Bantuan Sosial
                                </td>

                                <td>

                                    <a href="/program/1/edit"
                                       class="btn btn-warning btn-sm">

                                        <i class="fas fa-edit"></i>
                                        Edit

                                    </a>

                                    <a href="#"
                                       class="btn btn-danger btn-sm">

                                        <i class="fas fa-trash"></i>
                                        Hapus

                                    </a>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection