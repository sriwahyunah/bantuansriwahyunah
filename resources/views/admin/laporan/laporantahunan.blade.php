@extends('layouts.admin')

@section('title', 'Laporan Tahunan')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">
            Filter Laporan Tahunan
        </h3>

    </div>

    <form action="{{ route('laporantahunan.cetak') }}"
          method="GET"
          target="_blank">

        <div class="card-body">

            <div class="form-group">

                <label>Tahun</label>

                <input type="number"
                       name="tahun"
                       class="form-control"
                       placeholder="2026"
                       required>

            </div>

        </div>

        <div class="card-footer">

            <button type="submit"
                    class="btn btn-success">

                <i class="fas fa-print"></i>
                Cetak Laporan

            </button>

        </div>

    </form>

</div>

@endsection