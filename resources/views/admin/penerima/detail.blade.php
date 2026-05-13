@extends('layouts.admin')

@section('title', 'Detail Penerima')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Detail Penerima</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-body">

                    @if($penerima->foto)

                    <img src="{{ asset('uploads/penerima/'.$penerima->foto) }}"
                        width="120"
                        class="mb-3">

                    @endif

                    <table class="table table-bordered">

                        <tr>
                            <th>NIK</th>
                            <td>{{ $penerima->nik }}</td>
                        </tr>

                        <tr>
                            <th>KK</th>
                            <td>{{ $penerima->kk }}</td>
                        </tr>

                        <tr>
                            <th>Nama</th>
                            <td>{{ $penerima->nama }}</td>
                        </tr>

                        <tr>
                            <th>Username</th>
                            <td>{{ $penerima->username }}</td>
                        </tr>

                        <tr>
                            <th>Telepon</th>
                            <td>{{ $penerima->telepon }}</td>
                        </tr>

                        <tr>
                            <th>Status Verifikasi</th>
                            <td>{{ $penerima->status_verifikasi }}</td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>{{ $penerima->status }}</td>
                        </tr>

                    </table>

                    <a href="{{ route('admin.penerima.index') }}"
                        class="btn btn-secondary">

                        Kembali

                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection