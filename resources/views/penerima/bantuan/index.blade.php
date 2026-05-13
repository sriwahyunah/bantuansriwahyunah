@extends('layouts.penerima')

@section('title', 'Data Bantuan')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">

            Bantuan Yang Diterima

        </h3>

    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Jenis Bantuan</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Status</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($bantuans as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>
                        {{ $item->jenisBantuan->nama_jenis ?? '-' }}
                    </td>

                    <td>

                        Rp {{ number_format($item->jumlah_bantuan,0,',','.') }}

                    </td>

                    <td>

                        {{ $item->tanggal }}

                    </td>

                    <td>

                        <span class="badge badge-success">

                            Disalurkan

                        </span>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection