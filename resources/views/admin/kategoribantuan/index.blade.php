@extends('layouts.app')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Data Kategori Bantuan</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-header">

                    <a href="{{ route('kategoribantuan.create') }}"
                       class="btn btn-primary">

                        Tambah Data

                    </a>

                </div>

                <div class="card-body">

                    @if(session('success'))

                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>

                    @endif

                    <table class="table table-bordered table-striped">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th width="200">Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($kategori as $item)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    {{ $item->nama_kategori }}
                                </td>

                                <td>
                                    {{ $item->deskripsi }}
                                </td>

                                <td>
                                    {{ $item->status }}
                                </td>

                                <td>

                                    <a href="{{ route('kategoribantuan.edit', $item->id) }}"
                                       class="btn btn-warning btn-sm">

                                        Edit

                                    </a>

                                    <form action="{{ route('kategoribantuan.destroy', $item->id) }}"
                                          method="POST"
                                          style="display:inline;">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">

                                            Hapus

                                        </button>

                                    </form>

                                </td>

                            </tr>

                            @empty

                            <tr>

                                <td colspan="5" class="text-center">

                                    Data kategori bantuan belum tersedia

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