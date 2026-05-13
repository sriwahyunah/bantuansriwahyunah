@extends('layouts.admin')

@section('title', 'Daftar Laporan')

@section('content')

<div class="row">

    <div class="col-lg-4 col-12">

        <div class="small-box bg-info">

            <div class="inner">

                <h3>Bulanan</h3>

                <p>Laporan Bulanan</p>

            </div>

            <div class="icon">

                <i class="fas fa-calendar"></i>

            </div>

            <a href="{{ route('laporanbulanan.index') }}"
               class="small-box-footer">

                Buka <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

    <div class="col-lg-4 col-12">

        <div class="small-box bg-success">

            <div class="inner">

                <h3>Tahunan</h3>

                <p>Laporan Tahunan</p>

            </div>

            <div class="icon">

                <i class="fas fa-file"></i>

            </div>

            <a href="{{ route('laporantahunan.index') }}"
               class="small-box-footer">

                Buka <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

    <div class="col-lg-4 col-12">

        <div class="small-box bg-warning">

            <div class="inner">

                <h3>Penyaluran</h3>

                <p>Laporan Penyaluran</p>

            </div>

            <div class="icon">

                <i class="fas fa-hand-holding-heart"></i>

            </div>

            <a href="{{ route('laporanpenyaluran.index') }}"
               class="small-box-footer">

                Buka <i class="fas fa-arrow-circle-right"></i>

            </a>

        </div>

    </div>

</div>

@endsection