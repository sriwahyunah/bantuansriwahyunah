@extends('layouts.penerima')

@section('title', 'Riwayat Bantuan')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">

            Riwayat Bantuan

        </h3>

    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Jenis Bantuan</th>
                    <th>Status</th>
                    <th>Tanggal</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($riwayats as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>
                        {{ $item->jenisBantuan->nama_jenis ?? '-' }}
                    </td>

                    <td>
                        {{ $item->status }}
                    </td>

                    <td>
                        {{ $item->created_at->format('d-m-Y') }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection