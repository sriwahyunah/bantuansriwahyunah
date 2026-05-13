@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Data Penerima</h1>

    <a href="{{ route('penerima.create') }}" class="btn btn-primary mb-3">
        Tambah Data
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
            </tr>
        </thead>

        <tbody>

            @foreach($penerimas as $p)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nik }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->no_hp }}</td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection