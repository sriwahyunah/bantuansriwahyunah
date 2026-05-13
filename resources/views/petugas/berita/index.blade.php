@extends('layouts.petugas')

@section('title', 'Data Berita')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between">

        <h3 class="card-title">
            Data Berita
        </h3>

        <a href="{{ route('berita.create') }}"
           class="btn btn-primary">

            Tambah Berita

        </a>

    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($beritas as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->judul }}</td>

                    <td>{{ $item->status }}</td>

                    <td>

                        <a href="{{ route('berita.edit', $item->id) }}"
                           class="btn btn-warning btn-sm">

                            Edit

                        </a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection