@extends('layouts.app')

@section('title', 'Data User')

@section('content')

<div class="content-wrapper">

    {{-- HEADER --}}
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Data User</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/dashboard') }}">
                                Dashboard
                            </a>
                        </li>

                        <li class="breadcrumb-item active">
                            User
                        </li>
                    </ol>
                </div>

            </div>

        </div>
    </section>

    {{-- CONTENT --}}
    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary card-outline">

                <div class="card-header">

                    <h3 class="card-title">
                        Data User
                    </h3>

                    <div class="card-tools">

                        <a href="{{ route('user.create') }}"
                           class="btn btn-primary btn-sm">

                            <i class="fas fa-plus"></i>
                            Tambah User

                        </a>

                    </div>

                </div>

                <div class="card-body table-responsive p-0">

                    <table class="table table-bordered table-hover text-nowrap">

                        <thead class="bg-primary">

                            <tr>
                                <th width="5%">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th width="20%">Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($user as $u)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $u->name }}</td>

                                <td>{{ $u->email }}</td>

                                <td>

                                    <a href="{{ route('user.show', $u->id) }}"
                                       class="btn btn-info btn-sm">

                                        <i class="fas fa-eye"></i>

                                    </a>

                                    <a href="{{ route('user.edit', $u->id) }}"
                                       class="btn btn-warning btn-sm">

                                        <i class="fas fa-edit"></i>

                                    </a>

                                    <form action="{{ route('user.destroy', $u->id) }}"
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
                                <td colspan="4" class="text-center">
                                    Data tidak tersedia
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