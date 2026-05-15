@extends('layouts.admin')

@section('title', 'Data Pengajuan')

@section('content')

<div class="container-fluid">

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">

            <h5 class="mb-0">
                Data Pengajuan Bantuan
            </h5>

        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Jenis Bantuan</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($pengajuan as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->jenis_bantuan }}</td>

                        <td>{{ $item->keterangan }}</td>

                        <td>

                            <span class="badge badge-warning">
                                {{ $item->status }}
                            </span>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="4"
                            class="text-center">

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