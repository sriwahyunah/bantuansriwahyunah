@extends('layouts.app')

@section('title', 'Data Jabatan')

@section('content')

<style>

    .table td,
    .table th{
        vertical-align: middle !important;
    }

    .card{
        border-radius: 15px;
    }

</style>

<div class="content-wrapper">

    <!-- HEADER -->
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-3">

                <div class="col-sm-6">

                    <h1 class="m-0 font-weight-bold">
                        Data Jabatan
                    </h1>

                </div>

                <div class="col-sm-6 text-right">

                    <a href="{{ route('jabatan.create') }}"
                       class="btn btn-primary shadow-sm">

                        <i class="fas fa-plus mr-1"></i>
                        Tambah Jabatan

                    </a>

                </div>

            </div>

        </div>
    </section>

    <!-- CONTENT -->
    <section class="content">
        <div class="container-fluid">

            <div class="card shadow-sm card-outline card-primary">

                <!-- CARD HEADER -->
                <div class="card-header">

                    <h3 class="card-title font-weight-bold">

                        <i class="fas fa-briefcase mr-1"></i>
                        Tabel Jabatan

                    </h3>

                </div>

                <!-- CARD BODY -->
                <div class="card-body p-0">

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover mb-0">

                            <thead class="bg-dark text-white text-center">

                                <tr>

                                    <th width="5%">No</th>
                                    <th>Nama Jabatan</th>
                                    <th width="20%">Tanggal Dibuat</th>
                                    <th width="20%">Aksi</th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse($jabatan as $item)

                                <tr>

                                    <!-- NO -->
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>

                                    <!-- NAMA -->
                                    <td class="font-weight-bold">
                                        {{ $item->nama }}
                                    </td>

                                    <!-- CREATED -->
                                    <td class="text-center">

                                        {{ $item->created_at->format('d M Y') }}

                                    </td>

                                    <!-- AKSI -->
                                    <td class="text-center">

                                        <!-- DETAIL -->
                                        <a href="{{ route('jabatan.show', $item->id) }}"
                                           class="btn btn-info btn-sm">

                                            <i class="fas fa-eye"></i>

                                        </a>

                                        <!-- EDIT -->
                                        <a href="{{ route('jabatan.edit', $item->id) }}"
                                           class="btn btn-warning btn-sm">

                                            <i class="fas fa-edit"></i>

                                        </a>

                                        <!-- DELETE -->
                                        <form action="{{ route('jabatan.destroy', $item->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin hapus data?')">

                                                <i class="fas fa-trash"></i>

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                                @empty

                                <tr>

                                    <td colspan="4"
                                        class="text-center p-5">

                                        <i class="fas fa-folder-open fa-3x text-secondary mb-3"></i>

                                        <br>

                                        <span class="text-secondary">

                                            Data jabatan belum tersedia

                                        </span>

                                    </td>

                                </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>
    </section>

</div>

@endsection