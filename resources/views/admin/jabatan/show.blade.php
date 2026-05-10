@extends('layouts.app')

@section('title', 'Detail Jabatan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Detail Jabatan</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">
                        Informasi Jabatan
                    </h3>
                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>
                            <th width="20%">Nama Jabatan</th>
                            <td>{{ $jabatan->nama }}</td>
                        </tr>

                    </table>

                </div>

                <div class="card-footer">

                    <a href="{{ route('jabatan.index') }}"
                       class="btn btn-secondary">

                        Kembali

                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection