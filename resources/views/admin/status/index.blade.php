@extends('layouts.app')

@section('title', 'Data Status')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Data Status</h1>
                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="{{ url('/dashboard') }}">
                                Dashboard
                            </a>
                        </li>

                        <li class="breadcrumb-item active">
                            Status
                        </li>

                    </ol>

                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary card-outline">

                <div class="card-header">

                    <h3 class="card-title">
                        Data Status
                    </h3>

                    <div class="card-tools">

                        <a href="{{ route('status.create') }}"
                           class="btn btn-primary btn-sm">

                            <i class="fas fa-plus"></i>
                            Tambah Status

                        </a>

                    </div>

                </div>

                <div class="card-body table-responsive p-0">

                    <table class="table table-bordered table-hover">

                        <thead class="bg-primary">

                            <tr>
                                <th width="5%">No</th>
                                <th>Nama Status</th>
                                <th width="20%">Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($status as $s)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $s->nama }}</td>

                                <td>

                                    <a href="{{ route('status.show', $s->id) }}"
                                       class="btn btn-info btn-sm">

                                        <i class="fas fa-eye"></i>

                                    </a>

                                    <a href="{{ route('status.edit', $s->id) }}"
                                       class="btn btn-warning btn-sm">

                                        <i class="fas fa-edit"></i>

                                    </a>

                                    <form action="{{ route('status.destroy', $s->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">

                                            <i class="fas fa-trash"></i>

                                        </button>

                                    </form>

                                </td>

                            </tr>

                            @empty

                            <tr>

                                <td colspan="3" class="text-center">
                                    Data kosong
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