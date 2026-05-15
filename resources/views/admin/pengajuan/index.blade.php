@extends('layouts.admin')

@section('title', 'Data Pengajuan')

@section('content')

<div class="content-wrapper">

    {{-- HEADER --}}
    <section class="content-header">

        <div class="container-fluid">

            <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">

                <div>

                    <h1 class="font-weight-bold text-dark mb-1">
                        Data Pengajuan Bantuan
                    </h1>

                    <p class="text-muted mb-0">
                        Daftar pengajuan bantuan masyarakat
                    </p>

                </div>

                <div class="mt-2 mt-md-0">

                    <a href="#"
                       class="btn btn-primary shadow-sm">

                        <i class="fas fa-plus-circle mr-1"></i>

                        Tambah Pengajuan

                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- CONTENT --}}
    <section class="content">

        <div class="container-fluid">

            {{-- CARD --}}
            <div class="card border-0 shadow-sm">

                {{-- HEADER CARD --}}
                <div class="card-header bg-primary border-0">

                    <div class="d-flex justify-content-between align-items-center flex-wrap">

                        <h3 class="card-title font-weight-bold mb-0">

                            Data Pengajuan Bantuan

                        </h3>

                        <div class="text-white small mt-2 mt-md-0">

                            Total Pengajuan :
                            <strong>{{ $pengajuan->count() }}</strong>

                        </div>

                    </div>

                </div>



                {{-- TABLE --}}
                <div class="card-body p-0">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle mb-0">

                            <thead class="bg-light">

                                <tr>

                                    <th width="5%" class="text-center">
                                        No
                                    </th>

                                    <th>
                                        Jenis Bantuan
                                    </th>

                                    <th>
                                        Keterangan
                                    </th>

                                    <th width="15%">
                                        Status
                                    </th>

                                </tr>

                            </thead>



                            <tbody>

                                @forelse($pengajuan as $item)

                                <tr>

                                    <td class="text-center">

                                        {{ $loop->iteration }}

                                    </td>



                                    <td>

                                        <div class="font-weight-bold text-dark">

                                            {{ $item->jenis_bantuan }}

                                        </div>

                                        <small class="text-muted">

                                            Bantuan Sosial

                                        </small>

                                    </td>



                                    <td>

                                        <span class="text-muted">

                                            {{ $item->keterangan }}

                                        </span>

                                    </td>



                                    <td>

                                        @if($item->status == 'Disetujui')

                                            <span class="badge badge-success px-3 py-2">

                                                <i class="fas fa-check-circle mr-1"></i>

                                                Disetujui

                                            </span>

                                        @elseif($item->status == 'Pending')

                                            <span class="badge badge-warning px-3 py-2">

                                                <i class="fas fa-clock mr-1"></i>

                                                Pending

                                            </span>

                                        @else

                                            <span class="badge badge-danger px-3 py-2">

                                                <i class="fas fa-times-circle mr-1"></i>

                                                Ditolak

                                            </span>

                                        @endif

                                    </td>

                                </tr>

                                @empty

                                <tr>

                                    <td colspan="4"
                                        class="text-center py-5 text-muted">

                                        <i class="fas fa-file-alt fa-2x mb-3"></i>

                                        <br>

                                        Tidak ada data pengajuan

                                    </td>

                                </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>



                {{-- FOOTER --}}
                <div class="card-footer bg-white border-0">

                    <div class="text-muted small">

                        Sistem Bantuan Masyarakat

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection