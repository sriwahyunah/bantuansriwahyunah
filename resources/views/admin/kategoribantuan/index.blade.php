@extends('layouts.appuser')

@section('title', 'Kategori Bantuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Kategori Bantuan</h1>
                </div>

                <div class="col-sm-6">

                    <a href="{{ route('kategoribantuan.create') }}"
                        class="btn btn-primary float-sm-right">

                        <i class="fas fa-plus"></i>
                        Tambah Kategori

                    </a>

                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary card-outline">

                <div class="card-header">
                    <h3 class="card-title">
                        Data Kategori Bantuan
                    </h3>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($kategori as $k)

                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->nama }}</td>

                                <td>

                                    <a href="{{ route('kategoribantuan.show', $k->id) }}"
                                        class="btn btn-info btn-sm">

                                        <i class="fas fa-eye"></i>

                                    </a>

                                    <a href="{{ route('kategoribantuan.edit', $k->id) }}"
                                        class="btn btn-warning btn-sm">

                                        <i class="fas fa-edit"></i>

                                    </a>

                                </td>

                            </tr>

                            @empty

                            <tr>
                                <td colspan="3" class="text-center">
                                    Data kosong
                                </td>
                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection