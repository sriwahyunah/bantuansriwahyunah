@php
use Illuminate\Support\Str;
@endphp

@extends('layouts.penerima')

@section('title', 'Dashboard Penerima')

@section('content')

<div class="container-fluid">

    {{-- HERO SECTION --}}
    <div class="card border-0 shadow-lg mb-4"
         style="border-radius:20px;
                background:linear-gradient(135deg,#0d6efd,#3d8bfd);">

        <div class="card-body p-4 text-white">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <h2 class="font-weight-bold mb-2">
                        Selamat Datang 👋
                    </h2>

                    <p class="mb-3" style="font-size:16px;">
                        Kelola pengajuan bantuan sosial Anda dengan mudah,
                        cepat, dan transparan.
                    </p>

                    <a href="/pengajuan"
                       class="btn btn-light btn-sm px-4">
                        <i class="fas fa-plus"></i>
                        Ajukan Bantuan
                    </a>

                </div>

                <div class="col-md-4 text-center">

                    <i class="fas fa-hand-holding-heart"
                       style="font-size:90px; opacity:0.2;">
                    </i>

                </div>

            </div>

        </div>

    </div>

    {{-- STATISTIK --}}
    <div class="row">

        <div class="col-md-3">

            <div class="card border-0 shadow-sm"
                 style="border-radius:18px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>
                            <small class="text-muted">
                                Total Pengajuan
                            </small>

                            <h2 class="font-weight-bold">
                                {{ $totalPengajuan ?? 0 }}
                            </h2>
                        </div>

                        <div class="text-primary">
                            <i class="fas fa-file-alt fa-2x"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card border-0 shadow-sm"
                 style="border-radius:18px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>
                            <small class="text-muted">
                                Disetujui
                            </small>

                            <h2 class="font-weight-bold text-success">
                                {{ $diterima ?? 0 }}
                            </h2>
                        </div>

                        <div class="text-success">
                            <i class="fas fa-check-circle fa-2x"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card border-0 shadow-sm"
                 style="border-radius:18px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>
                            <small class="text-muted">
                                Pending
                            </small>

                            <h2 class="font-weight-bold text-warning">
                                {{ $pending ?? 0 }}
                            </h2>
                        </div>

                        <div class="text-warning">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card border-0 shadow-sm"
                 style="border-radius:18px;">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>
                            <small class="text-muted">
                                Ditolak
                            </small>

                            <h2 class="font-weight-bold text-danger">
                                {{ $ditolak ?? 0 }}
                            </h2>
                        </div>

                        <div class="text-danger">
                            <i class="fas fa-times-circle fa-2x"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- MENU CEPAT --}}
    <div class="row mt-4">

        <div class="col-md-3">
            <a href="/pengajuan"
               class="text-decoration-none">

                <div class="card border-0 shadow-sm text-center p-3"
                     style="border-radius:18px;">

                    <i class="fas fa-file-signature fa-2x text-primary mb-3"></i>

                    <h6 class="font-weight-bold">
                        Ajukan Bantuan
                    </h6>

                </div>

            </a>
        </div>

        <div class="col-md-3">
            <a href="/riwayat"
               class="text-decoration-none">

                <div class="card border-0 shadow-sm text-center p-3"
                     style="border-radius:18px;">

                    <i class="fas fa-history fa-2x text-success mb-3"></i>

                    <h6 class="font-weight-bold">
                        Riwayat Pengajuan
                    </h6>

                </div>

            </a>
        </div>

        <div class="col-md-3">
            <a href="/profil"
               class="text-decoration-none">

                <div class="card border-0 shadow-sm text-center p-3"
                     style="border-radius:18px;">

                    <i class="fas fa-user fa-2x text-warning mb-3"></i>

                    <h6 class="font-weight-bold">
                        Profil Saya
                    </h6>

                </div>

            </a>
        </div>

        <div class="col-md-3">
            <a href="/bantuan"
               class="text-decoration-none">

                <div class="card border-0 shadow-sm text-center p-3"
                     style="border-radius:18px;">

                    <i class="fas fa-newspaper fa-2x text-danger mb-3"></i>

                    <h6 class="font-weight-bold">
                        Informasi Bantuan
                    </h6>

                </div>

            </a>
        </div>

    </div>

    {{-- RIWAYAT --}}
    <div class="card border-0 shadow-sm mt-4"
         style="border-radius:20px;">

        <div class="card-header bg-white border-0 pt-4">

            <h5 class="font-weight-bold">
                Riwayat Pengajuan
            </h5>

        </div>

        <div class="card-body table-responsive">

            <table class="table table-hover">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($riwayat as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>

                            @if($item->status == 'diterima')

                                <span class="badge badge-success px-3 py-2">
                                    Disetujui
                                </span>

                            @elseif($item->status == 'ditolak')

                                <span class="badge badge-danger px-3 py-2">
                                    Ditolak
                                </span>

                            @else

                                <span class="badge badge-warning px-3 py-2">
                                    Pending
                                </span>

                            @endif

                        </td>

                        <td>
                            {{ $item->created_at ?? '-' }}
                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="3" class="text-center">
                            Tidak ada data pengajuan
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

    {{-- BERITA --}}
    <div class="row mt-4">

        @foreach($berita as $item)

        <div class="col-md-4">

            <div class="card border-0 shadow-sm h-100"
                 style="border-radius:20px;">

                <div class="card-body">

                    <span class="badge badge-primary mb-2">
                        Informasi Bantuan
                    </span>

                    <h5 class="font-weight-bold">
                        {{ $item->judul ?? 'Berita Bantuan' }}
                    </h5>

                    <p class="text-muted">

                        {{ Str::limit($item->isi ?? '-', 120) }}

                    </p>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection