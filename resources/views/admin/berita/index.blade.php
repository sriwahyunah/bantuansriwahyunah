@extends('layouts.admin')

@section('title', 'Data Berita')

@section('content')

<div class="content-wrapper">

    {{-- HEADER --}}
    <section class="content-header">

        <div class="container-fluid">

            <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">

                <div>

                    <h1 class="font-weight-bold">
                        Data Berita
                    </h1>

                    <p class="text-muted mb-0">
                        Informasi berita sistem bantuan
                    </p>

                </div>

                <div>

                    <a href="{{ route('berita.create') }}"
                       class="btn btn-primary">

                        <i class="fas fa-plus-circle mr-1"></i>

                        Tambah Berita

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

                <div class="alert alert-success alert-dismissible fade show">

                    <button type="button"
                            class="close"
                            data-dismiss="alert">

                        <span>&times;</span>

                    </button>

                    {{ session('success') }}

                </div>

            @endif



            {{-- CARD --}}
            <div class="card shadow-sm border-0">

                <div class="card-header bg-primary">

                    <h3 class="card-title">

                        Data Berita Bantuan

                    </h3>

                </div>



                <div class="card-body p-0">

                    <div class="table-responsive">

                        <table class="table table-hover mb-0">

                            <thead class="bg-light">

                                <tr>

                                    <th width="5%">
                                        No
                                    </th>

                                    <th>
                                        Judul Berita
                                    </th>

                                    <th>
                                        Penulis
                                    </th>

                                    <th>
                                        Tanggal
                                    </th>

                                    <th width="18%" class="text-center">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>



                            <tbody>

                                @forelse($berita as $item)

                                    <tr>

                                        <td>

                                            {{ $loop->iteration }}

                                        </td>



                                        <td>

                                            <div class="font-weight-bold">

                                                {{ $item->judul }}

                                            </div>

                                            <small class="text-muted">

                                                {{ Str::limit($item->isi, 60) }}

                                            </small>

                                        </td>



                                        <td>

                                            {{ $item->penulis ?? 'Admin' }}

                                        </td>



                                        <td>

                                            {{ date('d M Y', strtotime($item->created_at)) }}

                                        </td>



                                        <td class="text-center">

                                            {{-- DETAIL --}}
                                            <a href="{{ route('berita.show', $item->id) }}"
                                               class="btn btn-info btn-sm">

                                                <i class="fas fa-eye"></i>

                                            </a>



                                            {{-- EDIT --}}
                                            <a href="{{ route('berita.edit', $item->id) }}"
                                               class="btn btn-warning btn-sm">

                                                <i class="fas fa-edit"></i>

                                            </a>



                                            {{-- DELETE --}}
                                            <form action="{{ route('berita.destroy', $item->id) }}"
                                                  method="POST"
                                                  class="d-inline">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin hapus berita?')">

                                                    <i class="fas fa-trash"></i>

                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="5"
                                            class="text-center py-5 text-muted">

                                            <i class="fas fa-newspaper fa-2x mb-3"></i>

                                            <br>

                                            Tidak ada data berita

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>



                {{-- PAGINATION --}}
                <div class="card-footer bg-white">

                    {{ $berita->links() }}

                </div>

            </div>

        </div>

    </section>

</div>

@endsection