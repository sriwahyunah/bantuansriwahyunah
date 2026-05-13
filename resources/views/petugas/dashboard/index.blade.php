@extends('layouts.petugas')

@section('title', 'Dashboard Petugas')

@section('content')

<div class="row">

    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">

            <div class="inner">

                <h3>{{ $totalPengajuan ?? 0 }}</h3>

                <p>Pengajuan</p>

            </div>

            <div class="icon">

                <i class="fas fa-folder-open"></i>

            </div>

            <a href="{{ route('pengajuan.index') }}"
               class="small-box-footer">

                Detail
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">

            <div class="inner">

                <h3>{{ $totalVerifikasi ?? 0 }}</h3>

                <p>Verifikasi</p>

            </div>

            <div class="icon">

                <i class="fas fa-check-circle"></i>

            </div>

            <a href="{{ route('verifikasi.index') }}"
               class="small-box-footer">

                Detail
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">

            <div class="inner">

                <h3>{{ $totalPenyaluran ?? 0 }}</h3>

                <p>Penyaluran</p>

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

    <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">

            <div class="inner">

                <h3>{{ $totalBerita ?? 0 }}</h3>

                <p>Berita</p>

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

@endsection