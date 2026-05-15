@extends('layouts.admin')

@section('title', 'Detail Bantuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>

                Detail Bantuan

            </h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-success card-outline">

                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>

                            <th width="30%">
                                Kode Bantuan
                            </th>

                            <td>

                                {{ $bantuan->kode_bantuan }}

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Nama Bantuan
                            </th>

                            <td>

                                {{ $bantuan->nama_bantuan }}

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Total Kuota
                            </th>

                            <td>

                                {{ $bantuan->total_kuota }}

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Terdistribusi
                            </th>

                            <td>

                                {{ $bantuan->terdistribusi }}

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Status
                            </th>

                            <td>

                                {{ $bantuan->status }}

                            </td>

                        </tr>

                    </table>

                    <a href="{{ route('bantuan.index') }}"
                       class="btn btn-secondary">

                        Kembali

                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection