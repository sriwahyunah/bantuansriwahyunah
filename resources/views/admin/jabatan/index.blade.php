@extends('layouts.app')

@section('content')

<div class="content-wrapper">

    <!-- HEADER -->
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-3">

                <div class="col-sm-6">
                    <h1 class="m-0">
                        Data Jabatan
                    </h1>
                </div>

                <div class="col-sm-6 text-right">
                    <a href="{{ route('jabatan.create') }}"
                       class="btn btn-primary">

                        <i class="fas fa-plus"></i>
                        Tambah Jabatan
                    </a>
                </div>

            </div>

        </div>
    </section>

    <!-- CONTENT -->
    <section class="content">
        <div class="container-fluid">

            <div class="card shadow-sm">

                <div class="card-header bg-primary">

                    <h3 class="card-title">
                        <i class="fas fa-briefcase"></i>
                        Tabel Jabatan
                    </h3>

                </div>

                <div class="card-body p-0">

                    <table class="table table-bordered table-hover mb-0">

                        <thead class="text-center">

                            <tr>
                                <th width="5%">No</th>
                                <th>Nama Jabatan</th>
                                <th>Keterangan</th>
                                <th width="25%">Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($jabatan as $item)

                            <tr>

                                <td class="text-center">
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $item->nama_jabatan }}
                                </td>

                                <td>
                                    {{ $item->keterangan }}
                                </td>

                                <td class="text-center">

                                    <a href="{{ route('jabatan.show', $item->id) }}"
                                       class="btn btn-info btn-sm">

                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a href="{{ route('jabatan.edit', $item->id) }}"
                                       class="btn btn-warning btn-sm">

                                        <i class="fas fa-edit"></i>
                                    </a>

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

                                <td colspan="4" class="text-center p-4">

                                    <img src="https://cdn-icons-png.flaticon.com/512/7486/7486740.png"
                                         width="80"
                                         class="mb-3">

                                    <br>

                                    <strong>
                                        Data jabatan belum tersedia
                                    </strong>

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