@extends('layouts.admin')

@section('title', 'Laporan Bulanan')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">
            Filter Laporan Bulanan
        </h3>

    </div>

    <form action="{{ route('laporanbulanan.cetak') }}"
          method="GET"
          target="_blank">

        <div class="card-body">

            <div class="form-group">

                <label>Bulan</label>

                <input type="month"
                       name="bulan"
                       class="form-control"
                       required>

            </div>

        </div>

        <div class="card-footer">

            <button type="submit"
                    class="btn btn-primary">

                <i class="fas fa-print"></i>
                Cetak Laporan

            </button>

        </div>

    </form>

</div>

@endsection