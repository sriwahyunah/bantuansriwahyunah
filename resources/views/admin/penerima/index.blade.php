@extends('layouts.appuser')

@section('title', 'Data Penerima')

@section('content')

<!-- Content Header -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="font-weight-bold">
                    Data Penerima
                </h1>
            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="breadcrumb-item active">
                        Penerima
                    </li>

                </ol>

            </div>

        </div>

    </div>

</section>

<!-- Main content -->
<section class="content">

    <div class="container-fluid">

        <div class="card card-primary card-outline shadow-sm">

            <!-- Card Header -->
            <div class="card-header">

                <h3 class="card-title">

                    <i class="fas fa-users mr-2"></i>
                    Data Penerima Bantuan

                </h3>

                <div class="card-tools">

                    <a href="{{ url('/penerima/create') }}"
                       class="btn btn-primary btn-sm">

                        <i class="fas fa-plus"></i>
                        Tambah Penerima

                    </a>

                </div>

            </div>

            <!-- Card Body -->
            <div class="card-body">

                <!-- Search -->
                <div class="row mb-3">

                    <div class="col-md-4">

                        <form action="{{ url('/penerima') }}"
                              method="GET">

                            <div class="input-group">

                                <input type="text"
                                       name="search"
                                       class="form-control"
                                       placeholder="Cari penerima..."
                                       value="{{ request('search') }}">

                                <div class="input-group-append">

                                    <button class="btn btn-primary">

                                        <i class="fas fa-search"></i>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                <!-- Table -->
                <div class="table-responsive">

                    <table class="table table-bordered table-hover">

                        <thead class="thead-dark text-center">

                            <tr>

                                <th width="5%">No</th>
                                <th width="10%">Foto</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th width="18%">Aksi</th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse ($penerima as $item)

                            <tr>

                                <!-- Nomor -->
                                <td class="text-center align-middle">

                                    {{ $loop->iteration }}

                                </td>

                                <!-- Foto -->
                                <td class="text-center align-middle">

                                    @if($item->foto)

                                        <img src="{{ asset('fotoupload/penerima/' . $item->foto) }}"
                                             class="img-circle elevation-2"
                                             width="60"
                                             height="60"
                                             style="object-fit: cover;">

                                    @else

                                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}"
                                             class="img-circle elevation-2"
                                             width="60"
                                             height="60">

                                    @endif

                                </td>

                                <!-- Nama -->
                                <td class="align-middle">

                                    {{ $item->nama }}

                                </td>

                                <!-- NIK -->
                                <td class="align-middle">

                                    {{ $item->nik }}

                                </td>

                                <!-- Jabatan -->
                                <td class="align-middle">

                                    {{ $item->jabatan->nama_jabatan ?? '-' }}

                                </td>

                                <!-- Status -->
                                <td class="text-center align-middle">

                                    <span class="badge badge-success">
                                        Aktif
                                    </span>

                                </td>

                                <!-- Aksi -->
                                <td class="text-center align-middle">

                                    <a href="{{ url('/penerima/' . $item->id) }}"
                                       class="btn btn-info btn-sm">

                                        <i class="fas fa-eye"></i>

                                    </a>

                                    <a href="{{ url('/penerima/' . $item->id . '/edit') }}"
                                       class="btn btn-warning btn-sm">

                                        <i class="fas fa-edit"></i>

                                    </a>

                                    <form action="{{ url('/penerima/' . $item->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus data?')">

                                            <i class="fas fa-trash"></i>

                                        </button>

                                    </form>

                                </td>

                            </tr>

                            @empty

                            <tr>

                                <td colspan="7"
                                    class="text-center text-muted">

                                    Data penerima belum tersedia

                                </td>

                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

                <!-- Pagination -->
                <div class="mt-3 d-flex justify-content-end">

                    {{ $penerima->links() }}

                </div>

            </div>

        </div>

    </div>

</section>

@endsection