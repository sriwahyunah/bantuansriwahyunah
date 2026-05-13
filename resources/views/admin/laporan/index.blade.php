@extends('layouts.admin') {{-- sesuaikan dengan layout kamu --}}

@section('title', 'Daftar Laporan')

@section('content')

<div class="container-fluid">

    {{-- TITLE --}}
    <div class="mb-3">
        <h3 class="fw-bold">Daftar Laporan</h3>
    </div>

    {{-- CARD --}}
    <div class="card shadow-sm border-0">

        {{-- HEADER --}}
        <div class="card-header bg-primary text-white">
            <strong>Data Laporan</strong>
        </div>

        {{-- BODY --}}
        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th width="60">No</th>
                            <th>Laporan</th>
                            <th>Deskripsi</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($laporan as $i => $item)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $item->laporan }}</td>
                            <td>{{ $item->deskripsi }}</td>

                            <td>
                                <a href="{{ route('laporan.show', $item->id) }}"
                                   class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('laporan.edit', $item->id) }}"
                                   class="btn btn-warning btn-sm text-white">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('laporan.destroy', $item->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus data?')">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection