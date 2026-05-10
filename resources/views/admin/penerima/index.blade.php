@extends('layouts.app')

@section('content')

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

            <div class="card card-outline card-primary shadow-sm">

                <!-- CARD HEADER -->
                <div class="card-header">

                    <h3 class="card-title">

                        <i class="fas fa-briefcase mr-1"></i>
                        Tabel Data Jabatan

                    </h3>

                </div>

                <!-- CARD BODY -->
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover">

                            <thead class="bg-primary text-white text-center">

                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama Jabatan</th>
                                    <th>Keterangan</th>
                                    <th width="20%">Aksi</th>
                                </tr>

                            </thead>

                            <tbody>

                                @forelse($jabatan as $item)

                                <tr>

                                    <td class="text-center align-middle">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td class="align-middle font-weight-bold">
                                        {{ $item->nama_jabatan }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $item->keterangan }}
                                    </td>

                                    <td class="text-center align-middle">

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
                                              style="display:inline-block">

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