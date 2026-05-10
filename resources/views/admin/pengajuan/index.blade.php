@extends('layouts.appuser')

@section('title', 'Data Pengajuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Data Pengajuan</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary card-outline">

                <div class="card-header">

                    <a href="{{ route('pengajuan.create') }}"
                        class="btn btn-primary btn-sm">

                        Tambah Pengajuan

                    </a>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Penerima</th>
                                <th>Jenis Bantuan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($pengajuan as $p)

                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->penerima->nama ?? '-' }}</td>
                                <td>{{ $p->jenis->nama ?? '-' }}</td>
                                <td>{{ $p->status->nama ?? '-' }}</td>

                                <td>

                                    <a href="{{ route('pengajuan.show', $p->id) }}"
                                        class="btn btn-info btn-sm">

                                        Detail

                                    </a>

                                </td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection