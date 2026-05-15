@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-3 col-6">
            <div class="small-box bg-info shadow">
                <div class="inner">
                    <h3>{{ $totalPenerima ?? 0 }}</h3>
                    <p>Total Penerima</p>
                </div>

                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success shadow">
                <div class="inner">
                    <h3>{{ $totalPengajuan ?? 0 }}</h3>
                    <p>Total Pengajuan</p>
                </div>

                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning shadow">
                <div class="inner">
                    <h3>{{ $pending ?? 0 }}</h3>
                    <p>Pending</p>
                </div>

                <div class="icon">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger shadow">
                <div class="inner">
                    <h3>{{ $ditolak ?? 0 }}</h3>
                    <p>Ditolak</p>
                </div>

                <div class="icon">
                    <i class="fas fa-times-circle"></i>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow border-0 mt-4">

        <div class="card-header bg-white">
            <h5 class="mb-0">
                Pengajuan Terbaru
            </h5>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($pengajuanTerbaru as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>

                            @if($item->status == 'diterima')

                                <span class="badge badge-success">
                                    Diterima
                                </span>

                            @elseif($item->status == 'ditolak')

                                <span class="badge badge-danger">
                                    Ditolak
                                </span>

                            @else

                                <span class="badge badge-warning">
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
                            Tidak ada data
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection