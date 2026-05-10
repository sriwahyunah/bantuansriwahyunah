@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container-fluid">

        <div class="row mb-3">
            <div class="col-sm-6">
                <h1 class="m-0 font-weight-bold">
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
</div>

<section class="content">
    <div class="container-fluid">

        <div class="row">

            <!-- Penerima -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="small-box bg-success elevation-3">

                    <div class="inner">
                        <h3>{{ $totalPenerima }}</h3>
                        <p>Total Penerima</p>
                    </div>

                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>

                </div>
            </div>

            <!-- Kategori -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="small-box bg-warning elevation-3">

                    <div class="inner">
                        <h3>{{ $totalKategori }}</h3>
                        <p>Total Kategori</p>
                    </div>

                    <div class="icon">
                        <i class="fas fa-layer-group"></i>
                    </div>

                </div>
            </div>

            <!-- Pengajuan -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="small-box bg-danger elevation-3">

                    <div class="inner">
                        <h3>{{ $totalPengajuan }}</h3>
                        <p>Total Pengajuan</p>
                    </div>

                    <div class="icon">
                        <i class="fas fa-file-signature"></i>
                    </div>

                </div>
            </div>

        </div>

        <!-- Card Informasi -->
        <div class="card elevation-2">

            <div class="card-header bg-primary">
                <h3 class="card-title">
                    <i class="fas fa-chart-line mr-2"></i>
                    Informasi Sistem
                </h3>
            </div>

            <div class="card-body">

                <h4 class="font-weight-bold">
                    Selamat Datang di Sistem Bantuan UNA
                </h4>

                <p class="text-muted">
                    Sistem ini digunakan untuk mengelola data bantuan,
                    penerima bantuan, kategori bantuan,
                    dan pengajuan bantuan masyarakat.
                </p>

            </div>

        </div>

    </div>
</section>

@endsection