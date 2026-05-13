@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">Dashboard Admin</h1>
    </div>
</div>

<section class="content">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">

                    <div class="inner">
                        <h3>1</h3>
                        <p>Total User</p>
                    </div>

                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>

                </div>
            </div>


        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalPenerima }}</h3>
                    <p>Total Penerima</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $totalPengajuan }}</h3>
                    <p>Total Pengajuan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $totalPenyaluran }}</h3>
                    <p>Total Penyaluran</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hand-holding"></i>
                </div>
            </div>
        </div>

    </div>

    <!-- QUICK MENU -->
    <div class="row mt-3">

        <div class="col-md-3">
            <a href="{{ url('/user') }}" class="btn btn-primary btn-block">
                <i class="fas fa-users"></i> Kelola User
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ url('/penerima') }}" class="btn btn-success btn-block">
                <i class="fas fa-user"></i> Kelola Penerima
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ url('/pengajuan') }}" class="btn btn-warning btn-block">
                <i class="fas fa-file"></i> Pengajuan
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ url('/laporan') }}" class="btn btn-danger btn-block">
                <i class="fas fa-chart-bar"></i> Laporan
            </a>
        </div>

    </div>

    <!-- TABLE TERBARU -->
    <div class="card mt-4">

        <div class="card-header">
            <h3 class="card-title">Pengajuan Terbaru</h3>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($pengajuanTerbaru as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nama ?? '-' }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection