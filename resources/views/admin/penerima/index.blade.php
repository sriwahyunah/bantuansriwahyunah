@extends('layouts.admin')

@section('title', 'Data Penerima')

@section('content')

<div class="content-wrapper">

    {{-- HEADER --}}
    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Data Penerima</h1>

                </div>

                <div class="col-sm-6 text-right">

                    <a href="{{ route('admin.penerima.create') }}"
                       class="btn btn-primary">

                        <i class="fas fa-plus"></i>

                        Tambah Penerima

                    </a>

                </div>

            </div>

        </div>

    </section>

    {{-- CONTENT --}}
    <section class="content">

        <div class="container-fluid">

            {{-- ALERT --}}
            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            {{-- CARD --}}
            <div class="card card-primary card-outline">

                <div class="card-header">

                    <h3 class="card-title">

                        Tabel Data Penerima

                    </h3>

                </div>

                <div class="card-body table-responsive p-0">

                    <table class="table table-bordered table-hover text-nowrap">

                        <thead class="bg-primary">

                            <tr>

                                <th width="50">No</th>

                                <th>Foto</th>

                                <th>NIK</th>

                                <th>KK</th>

                                <th>Nama</th>

                                <th>Username</th>

                                <th>Telepon</th>

                                <th>Status Verifikasi</th>

                                <th>Status</th>

                                <th width="180">Aksi</th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($penerima as $item)

                                <tr>

                                    {{-- NO --}}
                                    <td>

                                        {{ $loop->iteration }}

                                    </td>

                                    {{-- FOTO --}}
                                    <td>

                                        @if($item->foto)

                                            <img src="{{ asset('uploads/penerima/'.$item->foto) }}"
                                                 width="60"
                                                 height="60"
                                                 style="object-fit: cover"
                                                 class="img-circle">

                                        @else

                                            <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                                                 width="60"
                                                 height="60"
                                                 class="img-circle">

                                        @endif

                                    </td>

                                    {{-- NIK --}}
                                    <td>

                                        {{ $item->nik }}

                                    </td>

                                    {{-- KK --}}
                                    <td>

                                        {{ $item->kk }}

                                    </td>

                                    {{-- NAMA --}}
                                    <td>

                                        {{ $item->nama }}

                                    </td>

                                    {{-- USERNAME --}}
                                    <td>

                                        {{ $item->username }}

                                    </td>

                                    {{-- TELEPON --}}
                                    <td>

                                        {{ $item->telepon }}

                                    </td>

                                    {{-- STATUS VERIFIKASI --}}
                                    <td>

                                        @if($item->status_verifikasi == 'diterima')

                                            <span class="badge badge-success">

                                                DITERIMA

                                            </span>

                                        @elseif($item->status_verifikasi == 'ditolak')

                                            <span class="badge badge-danger">

                                                DITOLAK

                                            </span>

                                        @else

                                            <span class="badge badge-warning">

                                                PENDING

                                            </span>

                                        @endif

                                    </td>

                                    {{-- STATUS --}}
                                    <td>

                                        @if($item->status == 'aktif')

                                            <span class="badge badge-primary">

                                                AKTIF

                                            </span>

                                        @else

                                            <span class="badge badge-secondary">

                                                NONAKTIF

                                            </span>

                                        @endif

                                    </td>

                                    {{-- AKSI --}}
                                    <td>

                                        {{-- DETAIL --}}
                                        <a href="{{ route('admin.penerima.show', $item->id) }}"
                                           class="btn btn-info btn-sm">

                                            <i class="fas fa-eye"></i>

                                        </a>

                                        {{-- EDIT --}}
                                        <a href="{{ route('admin.penerima.edit', $item->id) }}"
                                           class="btn btn-warning btn-sm">

                                            <i class="fas fa-edit"></i>

                                        </a>

                                        {{-- DELETE --}}
                                        <form action="{{ route('admin.penerima.destroy', $item->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf

                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin hapus data ini?')">

                                                <i class="fas fa-trash"></i>

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="10"
                                        class="text-center">

                                        DATA PENERIMA BELUM ADA

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