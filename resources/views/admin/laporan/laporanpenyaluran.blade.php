@extends('layouts.admin')

@section('title', 'Laporan Penyaluran')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between">

        <h3 class="card-title">
            Data Penyaluran Bantuan
        </h3>

        <a href="{{ route('laporanpenyaluran.cetak') }}"
           target="_blank"
           class="btn btn-primary">

            <i class="fas fa-print"></i>
            Cetak

        </a>

    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Penerima</th>
                    <th>Jumlah Bantuan</th>
                    <th>Tanggal</th>

                </tr>

            </thead>

            <tbody>

                @forelse ($penyalurans as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>
                        {{ $item->penerima->nama ?? '-' }}
                    </td>

                    <td>
                        Rp {{ number_format($item->jumlah_bantuan, 0, ',', '.') }}
                    </td>

                    <td>
                        {{ $item->tanggal }}
                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="4" class="text-center">
                        Data kosong
                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection