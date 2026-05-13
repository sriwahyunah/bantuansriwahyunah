@extends('layouts.penerima')

@section('title', 'Dashboard Penerima')

@section('content')

<div class="row">

    <div class="col-lg-4 col-12">

        <div class="small-box bg-info">

            <div class="inner">

                <h3>{{ $totalPengajuan ?? 0 }}</h3>

                <p>Total Pengajuan</p>

            </div>

            <div class="icon">

                <i class="fas fa-folder-open"></i>

            </div>

            <a href="{{ route('penerima.pengajuan.index') }}"
               class="small-box-footer">

                Lihat Detail
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

    <div class="col-lg-4 col-12">

        <div class="small-box bg-success">

            <div class="inner">

                <h3>{{ $totalDisetujui ?? 0 }}</h3>

                <p>Pengajuan Disetujui</p>

            </div>

            <div class="icon">

                <i class="fas fa-check-circle"></i>

            </div>

            <a href="{{ route('penerima.riwayat.index') }}"
               class="small-box-footer">

                Lihat Detail
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

    <div class="col-lg-4 col-12">

        <div class="small-box bg-warning">

            <div class="inner">

                <h3>{{ $totalBantuan ?? 0 }}</h3>

                <p>Total Bantuan</p>

            </div>

            <div class="icon">

                <i class="fas fa-hand-holding-heart"></i>

            </div>

            <a href="{{ route('penerima.bantuan.index') }}"
               class="small-box-footer">

                Lihat Detail
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

</div>

@endsection