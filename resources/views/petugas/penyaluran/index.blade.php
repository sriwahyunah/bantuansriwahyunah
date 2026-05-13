@extends('layouts.petugas')

@section('title', 'Penyaluran Bantuan')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">
            Data Penyaluran
        </h3>

    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Penerima</th>
                    <th>Jumlah Bantuan</th>
                    <th>Tanggal</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($penyalurans as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->penerima->nama ?? '-' }}</td>

                    <td>
                        Rp {{ number_format($item->jumlah_bantuan,0,',','.') }}
                    </td>

                    <td>{{ $item->tanggal }}</td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection