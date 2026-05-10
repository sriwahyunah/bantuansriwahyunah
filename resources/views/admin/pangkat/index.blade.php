@extends('layouts.app')

@section('title', 'Data Pangkat')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Data Pangkat</h1>
                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-success card-outline">

                <div class="card-header">

                    <h3 class="card-title">
                        Data Pangkat
                    </h3>

                    <div class="card-tools">

                        <a href="{{ route('pangkat.create') }}"
                           class="btn btn-success btn-sm">

                            <i class="fas fa-plus"></i>
                            Tambah Pangkat

                        </a>

                    </div>

                </div>

                <div class="card-body table-responsive p-0">

                    <table class="table table-bordered table-hover">

                        <thead class="bg-success">

                            <tr>
                                <th width="5%">No</th>
                                <th>Nama Pangkat</th>
                                <th width="20%">Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($pangkat as $p)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $p->nama }}</td>

                                <td>

                                    <a href="{{ route('pangkat.show', $p->id) }}"
                                       class="btn btn-info btn-sm">

                                        <i class="fas fa-eye"></i>

                                    </a>

                                    <a href="{{ route('pangkat.edit', $p->id) }}"
                                       class="btn btn-warning btn-sm">

                                        <i class="fas fa-edit"></i>

                                    </a>

                                    <form action="{{ route('pangkat.destroy', $p->id) }}"
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