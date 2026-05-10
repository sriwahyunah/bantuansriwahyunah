@extends('layouts.app')

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Data Jabatan</h1>
                </div>

                <div class="col-sm-6 text-right">
                    <a href="{{ route('jabatan.create') }}"
                       class="btn btn-primary">
                        Tambah Jabatan
                    </a>
                </div>

            </div>

        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">
                        Tabel Jabatan
                    </h3>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jabatan</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($jabatan as $item)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_jabatan }}</td>
                                <td>{{ $item->keterangan }}</td>
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