@extends('layouts.penerima')

@section('title', 'Profil Saya')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">

            Profil Penerima

        </h3>

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <tr>

                <th width="30%">Nama</th>

                <td>{{ $penerima->nama }}</td>

            </tr>

            <tr>

                <th>NIK</th>

                <td>{{ $penerima->nik }}</td>

            </tr>

            <tr>

                <th>Email</th>

                <td>{{ $penerima->email }}</td>

            </tr>

            <tr>

                <th>No HP</th>

                <td>{{ $penerima->no_hp }}</td>

            </tr>

            <tr>

                <th>Alamat</th>

                <td>{{ $penerima->alamat }}</td>

            </tr>

        </table>

        <a href="{{ route('penerima.profil.edit') }}"
           class="btn btn-warning">

            Edit Profil

        </a>

    </div>

</div>

@endsection