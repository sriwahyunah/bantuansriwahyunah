@extends('layouts.admin')

@section('title', 'Data Berita')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between">

        <h3 class="card-title">Data Berita</h3>

        <a href="{{ route('berita.create') }}" class="btn btn-primary">
            Tambah Berita
        </a>

    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">

            <thead>

                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                @foreach ($beritas as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->judul }}</td>

                    <td>
                        <span class="badge badge-success">
                            {{ $item->status }}
                        </span>
                    </td>

                    <td>
                        {{ $item->created_at->format('d-m-Y') }}
                    </td>

                    <td>

                        <a href="{{ route('berita.show', $item->id) }}"
                           class="btn btn-info btn-sm">
                            Detail
                        </a>

                        <a href="{{ route('berita.edit', $item->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('berita.destroy', $item->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus data?')">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection