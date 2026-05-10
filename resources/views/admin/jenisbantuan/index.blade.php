@extends('layouts.appuser')

@section('title', 'Jenis Bantuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Jenis Bantuan</h1>
                </div>

                <div class="col-sm-6">

                    <a href="{{ route('jenisbantuan.create') }}"
                        class="btn btn-success float-sm-right">

                        Tambah Jenis

                    </a>

                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-success card-outline">

                <div class="card-header">
                    <h3 class="card-title">
                        Data Jenis Bantuan
                    </h3>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Jenis</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($jenis as $j)

                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $j->nama }}</td>
                                <td>{{ $j->kategori->nama ?? '-' }}</td>

                                <td>

                                    <a href="{{ route('jenisbantuan.show', $j->id) }}"
                                        class="btn btn-info btn-sm">

                                        <i class="fas fa-eye"></i>

                                    </a>

                                </td>

                            </tr>

                            @empty

                            <tr>
                                <td colspan="4" class="text-center">
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