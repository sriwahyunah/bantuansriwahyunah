@extends('layouts.petugas')

@section('title', 'Laporan')

@section('content')

<div class="row">

    <div class="col-md-4">

        <div class="small-box bg-info">

            <div class="inner">

                <h4>Laporan Bulanan</h4>

            </div>

            <div class="icon">

                <i class="fas fa-calendar"></i>

            </div>

            <a href="{{ route('laporanbulanan.index') }}"
               class="small-box-footer">

                Buka
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="small-box bg-success">

            <div class="inner">

                <h4>Laporan Tahunan</h4>

            </div>

            <div class="icon">

                <i class="fas fa-file"></i>

            </div>

            <a href="{{ route('laporantahunan.index') }}"
               class="small-box-footer">

                Buka
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="small-box bg-warning">

            <div class="inner">

                <h4>Laporan Penyaluran</h4>

            </div>

            <div class="icon">

                <i class="fas fa-print"></i>

            </div>

            <a href="{{ route('laporanpenyaluran.index') }}"
               class="small-box-footer">

                Buka
                <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

</div>

@endsection