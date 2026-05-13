@extends('layouts.petugas')

@section('title', 'Verifikasi Pengajuan')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">
            Data Verifikasi
        </h3>

    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Pengajuan</th>
                    <th>Status</th>
                    <th>Catatan</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($verifikasis as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>
                        {{ $item->pengajuan->judul_pengajuan ?? '-' }}
                    </td>

                    <td>
                        {{ $item->status_verifikasi }}
                    </td>

                    <td>
                        {{ $item->catatan }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection