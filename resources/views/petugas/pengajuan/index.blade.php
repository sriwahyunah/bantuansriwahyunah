@extends('layouts.petugas')

@section('title', 'Data Pengajuan')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">
            Data Pengajuan Bantuan
        </h3>

    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Penerima</th>
                    <th>Jenis Bantuan</th>
                    <th>Status</th>
                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($pengajuans as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->penerima->nama ?? '-' }}</td>

                    <td>{{ $item->jenisBantuan->nama_jenis ?? '-' }}</td>

                    <td>{{ $item->status }}</td>

                    <td>

                        <a href="{{ route('pengajuan.show', $item->id) }}"
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