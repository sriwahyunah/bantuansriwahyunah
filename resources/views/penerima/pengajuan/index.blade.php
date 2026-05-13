@extends('layouts.penerima')

@section('title', 'Pengajuan Bantuan')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between">

        <h3 class="card-title">

            Data Pengajuan Bantuan

        </h3>

        <a href="{{ route('penerima.pengajuan.create') }}"
           class="btn btn-primary">

            Tambah Pengajuan

        </a>

    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Jenis Bantuan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($pengajuans as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>
                        {{ $item->jenisBantuan->nama_jenis ?? '-' }}
                    </td>

                    <td>
                        {{ $item->created_at->format('d-m-Y') }}
                    </td>

                    <td>

                        <span class="badge badge-info">

                            {{ $item->status }}

                        </span>

                    </td>

                    <td>

                        <a href="{{ route('penerima.pengajuan.show', $item->id) }}"
                           class="btn btn-info btn-sm">

                            Detail

                        </a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection