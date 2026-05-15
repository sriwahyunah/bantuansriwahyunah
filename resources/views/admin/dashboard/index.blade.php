@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

<div class="content-wrapper">

    {{-- HEADER --}}
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Dashboard Admin
                    </h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </section>



    {{-- CONTENT --}}
    <section class="content">

        <div class="container-fluid">

            {{-- SMALL BOX --}}
            <div class="row">

                {{-- TOTAL PENERIMA --}}
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-primary">

                        <div class="inner">
                            <h3>
                                {{ $totalPenerima ?? 0 }}
                            </h3>

                            <p>
                                Total Penerima
                            </p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>

                        <a href="{{ route('penerima.index') }}"
                           class="small-box-footer">

                            Detail
                            <i class="fas fa-arrow-circle-right"></i>

                        </a>

                    </div>

                </div>



                {{-- TOTAL PENGAJUAN --}}
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">

                        <div class="inner">
                            <h3>
                                {{ $totalPengajuan ?? 0 }}
                            </h3>

                            <p>
                                Total Pengajuan
                            </p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-file-alt"></i>
                        </div>

                        <a href="{{ route('pengajuan.index') }}"
                           class="small-box-footer">

                            Detail
                            <i class="fas fa-arrow-circle-right"></i>

                        </a>

                    </div>

                </div>



                {{-- TOTAL PENYALURAN --}}
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">

                        <div class="inner">
                            <h3>
                                {{ $totalPenyaluran ?? 0 }}
                            </h3>

                            <p>
                                Bantuan Disalurkan
                            </p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>

                        <a href="{{ route('penyaluran.index') }}"
                           class="small-box-footer">

                            Detail
                            <i class="fas fa-arrow-circle-right"></i>

                        </a>

                    </div>

                </div>



                {{-- TOTAL BERITA --}}
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">

                        <div class="inner">
                            <h3>
                                {{ $totalBerita ?? 0 }}
                            </h3>

                            <p>
                                Total Berita
                            </p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>

                        <a href="{{ route('berita.index') }}"
                           class="small-box-footer">

                            Detail
                            <i class="fas fa-arrow-circle-right"></i>

                        </a>

                    </div>

                </div>

            </div>



            {{-- TABLE --}}
            <div class="row">

                <div class="col-md-8">

                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title">
                                Data Pengajuan Terbaru
                            </h3>
                        </div>

                        <div class="card-body table-responsive p-0">

                            <table class="table table-hover text-nowrap">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Bantuan</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse($pengajuanTerbaru as $item)

                                    <tr>

                                        <td>
                                            {{ $loop->iteration }}
                                        </td>

                                        <td>
                                            {{ $item->penerima->nama ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $item->jenisBantuan->nama ?? '-' }}
                                        </td>

                                        <td>

                                            @if($item->status == 'Disetujui')

                                                <span class="badge badge-success">
                                                    Disetujui
                                                </span>

                                            @elseif($item->status == 'Pending')

                                                <span class="badge badge-warning">
                                                    Pending
                                                </span>

                                            @else

                                                <span class="badge badge-danger">
                                                    Ditolak
                                                </span>

                                            @endif

                                        </td>

                                        <td>
                                            {{ date('d M Y', strtotime($item->created_at)) }}
                                        </td>

                                    </tr>

                                    @empty

                                    <tr>

                                        <td colspan="5" class="text-center">
                                            Tidak ada data
                                        </td>

                                    </tr>

                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>



                {{-- INFORMASI --}}
                <div class="col-md-4">

                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title">
                                Informasi Sistem
                            </h3>
                        </div>

                        <div class="card-body">

                            <strong>Login Sebagai :</strong>
                            <p>
                                {{ Auth::user()->name }}
                            </p>

                            <hr>

                            <strong>Tanggal :</strong>
                            <p>
                                {{ date('d F Y') }}
                            </p>

                            <hr>

                            <strong>Status :</strong>

                            <p>
                                <span class="badge badge-success">
                                    Sistem Aktif
                                </span>
                            </p>

                        </div>

                    </div>



                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title">
                                Menu Cepat
                            </h3>
                        </div>

                        <div class="card-body">

                            <a href="{{ route('pengajuan.index') }}"
                               class="btn btn-primary btn-block mb-2">

                                Data Pengajuan

                            </a>

                            <a href="{{ route('verifikasi.index') }}"
                               class="btn btn-success btn-block mb-2">

                                Verifikasi

                            </a>

                            <a href="{{ route('penyaluran.index') }}"
                               class="btn btn-warning btn-block mb-2">

                                Penyaluran

                            </a>

                            <a href="{{ route('laporan.index') }}"
                               class="btn btn-danger btn-block">

                                Laporan

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection