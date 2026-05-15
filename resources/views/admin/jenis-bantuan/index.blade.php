@extends('layouts.admin')

@section('title', 'Jenis Bantuan')

@section('content')

<div class="content-wrapper">

    {{-- HEADER --}}
    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>

                        <i class="fas fa-tags"></i>
                        Jenis Bantuan

                    </h1>

                </div>

                <div class="col-sm-6 text-right">

                    <a href="{{ route('jenis-bantuan.create') }}"
                       class="btn btn-success">

                        <i class="fas fa-plus"></i>
                        Tambah Jenis Bantuan

                    </a>

                </div>

            </div>

        </div>

    </section>

    {{-- CONTENT --}}
    <section class="content">

        <div class="container-fluid">

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            <div class="card card-success card-outline">

                <div class="card-body table-responsive">

                    <table class="table table-bordered table-hover">

                        <thead class="bg-light">

                            <tr>

                                <th width="5%">
                                    No
                                </th>

                                <th>
                                    Kode Jenis
                                </th>

                                <th>
                                    Nama Jenis Bantuan
                                </th>

                                <th>
                                    Deskripsi
                                </th>

                                <th width="10%">
                                    Status
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($jenis as $item)

                            <tr>

                                <td>

                                    {{ $loop->iteration }}

                                </td>

                                <td>

                                    <span class="badge badge-info">

                                        {{ $item->kode_jenis }}

                                    </span>

                                </td>

                                <td>

                                    {{ $item->nama_jenis }}

                                </td>

                                <td>

                                    {{ $item->deskripsi }}

                                </td>

                                <td>

                                    @if($item->status == 'aktif')

                                        <span class="badge badge-success">

                                            Aktif

                                        </span>

                                    @else

                                        <span class="badge badge-danger">

                                            Nonaktif

                                        </span>

                                    @endif

                                </td>

                            </tr>

                            @empty

                            <tr>

                                <td colspan="5"
                                    class="text-center">

                                    Data jenis bantuan belum tersedia

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