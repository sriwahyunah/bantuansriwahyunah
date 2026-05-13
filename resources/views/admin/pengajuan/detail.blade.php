@extends('layouts.admin')

@section('title', 'Detail Pengajuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Detail Pengajuan</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-header bg-primary">

                    <h3 class="card-title">

                        Data Detail Pengajuan

                    </h3>

                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>

                            <th width="250">
                                ID Pengajuan
                            </th>

                            <td>
                                {{ $pengajuan->id }}
                            </td>

                        </tr>

                        <tr>

                            <th>
                                ID Penerima
                            </th>

                            <td>
                                {{ $pengajuan->id_penerima }}
                            </td>

                        </tr>

                        <tr>

                            <th>
                                Judul
                            </th>

                            <td>
                                {{ $pengajuan->judul }}
                            </td>

                        </tr>

                        <tr>

                            <th>
                                Deskripsi
                            </th>

                            <td>
                                {{ $pengajuan->deskripsi }}
                            </td>

                        </tr>

                        <tr>

                            <th>
                                File
                            </th>

                            <td>

                                @if($pengajuan->file)

                                    <a href="{{ asset('uploads/pengajuan/' . $pengajuan->file) }}"
                                       target="_blank"
                                       class="btn btn-sm btn-info">

                                        Lihat File

                                    </a>

                                @else

                                    <span class="text-danger">
                                        Tidak ada file
                                    </span>

                                @endif

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Status
                            </th>

                            <td>

                                @if($pengajuan->status == 'pending')

                                    <span class="badge badge-warning">
                                        Pending
                                    </span>

                                @elseif($pengajuan->status == 'disetujui')

                                    <span class="badge badge-success">
                                        Disetujui
                                    </span>

                                @else

                                    <span class="badge badge-danger">
                                        Ditolak
                                    </span>

                                @endif

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Created At
                            </th>

                            <td>
                                {{ $pengajuan->created_at }}
                            </td>

                        </tr>

                        <tr>

                            <th>
                                Updated At
                            </th>

                            <td>
                                {{ $pengajuan->updated_at }}
                            </td>

                        </tr>

                    </table>

                </div>

                <div class="card-footer">

                    <a href="{{ url('/pengajuan') }}"
                       class="btn btn-secondary">

                        <i class="fas fa-arrow-left"></i>
                        Kembali

                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection