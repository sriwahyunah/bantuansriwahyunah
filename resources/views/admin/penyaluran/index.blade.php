@extends('layouts.appuser')

@section('title', 'Penyaluran Bantuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Penyaluran Bantuan</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-success card-outline">

                <div class="card-header">

                    <a href="{{ route('penyaluran.create') }}"
                        class="btn btn-success btn-sm">

                        Tambah Penyaluran

                    </a>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Penerima</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($penyaluran as $p)

                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->penerima->nama ?? '-' }}</td>
                                <td>{{ $p->tanggal }}</td>
                                <td>Rp {{ number_format($p->total) }}</td>

                                <td>

                                    <a href="{{ route('penyaluran.show', $p->id) }}"
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