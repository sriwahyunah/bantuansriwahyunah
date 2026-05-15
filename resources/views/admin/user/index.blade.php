@extends('layouts.admin')

@section('title', 'Data User')

@section('content')

<div class="content-wrapper">

    {{-- HEADER --}}
    <section class="content-header">

        <div class="container-fluid">

            <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">

                <div>

                    <h1 class="font-weight-bold text-dark mb-1">
                        Data User
                    </h1>

                    <p class="text-muted mb-0">
                        Kelola akun admin dan petugas sistem bantuan
                    </p>

                </div>

                <div class="mt-2 mt-md-0">

                    <a href="{{ route('user.create') }}"
                       class="btn btn-primary shadow-sm">

                        <i class="fas fa-plus-circle mr-1"></i>

                        Tambah User

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

                <div class="alert alert-success alert-dismissible fade show shadow-sm border-0">

                    <button type="button"
                            class="close"
                            data-dismiss="alert">

                        <span>&times;</span>

                    </button>

                    <i class="fas fa-check-circle mr-1"></i>

                    {{ session('success') }}

                </div>

            @endif



            {{-- CARD --}}
            <div class="card border-0 shadow-sm">

                {{-- HEADER CARD --}}
                <div class="card-header bg-primary border-0">

                    <div class="d-flex justify-content-between align-items-center flex-wrap">

                        <div>

                            <h3 class="card-title font-weight-bold">

                                Data User Sistem Bantuan

                            </h3>

                        </div>

                        <div class="text-white small">

                            Total User :
                            <strong>{{ $users->count() }}</strong>

                        </div>

                    </div>

                </div>



                {{-- TABLE --}}
                <div class="card-body p-0">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle mb-0">

                            <thead class="bg-light">

                                <tr>

                                    <th width="5%" class="text-center">
                                        No
                                    </th>

                                    <th>
                                        Nama User
                                    </th>

                                    <th>
                                        Email
                                    </th>

                                    <th width="20%" class="text-center">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>



                            <tbody>

                                @forelse($users as $item)

                                    <tr>

                                        <td class="text-center">

                                            {{ $loop->iteration }}

                                        </td>



                                        <td>

                                            <div class="d-flex align-items-center">

                                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mr-3"
                                                     style="width:45px; height:45px; font-weight:bold;">

                                                    {{ strtoupper(substr($item->name, 0, 1)) }}

                                                </div>

                                                <div>

                                                    <div class="font-weight-bold text-dark">

                                                        {{ $item->name }}

                                                    </div>

                                                    <small class="text-muted">

                                                        User Sistem

                                                    </small>

                                                </div>

                                            </div>

                                        </td>



                                        <td>

                                            <span class="text-muted">

                                                {{ $item->email }}

                                            </span>

                                        </td>



                                        <td class="text-center">

                                            {{-- DETAIL --}}
                                            <a href="{{ route('user.show', $item->id) }}"
                                               class="btn btn-info btn-sm shadow-sm">

                                                <i class="fas fa-eye"></i>

                                            </a>



                                            {{-- EDIT --}}
                                            <a href="{{ route('user.edit', $item->id) }}"
                                               class="btn btn-warning btn-sm shadow-sm">

                                                <i class="fas fa-edit"></i>

                                            </a>



                                            {{-- DELETE --}}
                                            <form action="{{ route('user.destroy', $item->id) }}"
                                                  method="POST"
                                                  class="d-inline">

                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger btn-sm shadow-sm"
                                                        onclick="return confirm('Yakin hapus data?')">

                                                    <i class="fas fa-trash"></i>

                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="4"
                                            class="text-center py-5 text-muted">

                                            <i class="fas fa-users fa-2x mb-3"></i>

                                            <br>

                                            Tidak ada data user

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