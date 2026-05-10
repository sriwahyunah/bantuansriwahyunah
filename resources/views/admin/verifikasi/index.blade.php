@extends('layouts.appuser')

@section('title', 'Verifikasi Pengajuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Verifikasi Pengajuan</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-warning card-outline">

                <div class="card-body table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Penerima</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($verifikasi as $v)

                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $v->pengajuan->penerima->nama ?? '-' }}</td>
                                <td>{{ $v->status }}</td>

                                <td>

                                    <a href="{{ route('verifikasi.show', $v->id) }}"
                                        class="btn btn-info btn-sm">

                                        Verifikasi

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