@extends('landing.layout')

@section('title', 'Daftar Isi')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Daftar Isi Website</h3>
        </div>

        <div class="card-body">

            <div class="list-group">

                <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
                    Home
                </a>

                <a href="{{ url('/program') }}" class="list-group-item list-group-item-action">
                    Program Bantuan
                </a>

                <a href="{{ url('/tentang') }}" class="list-group-item list-group-item-action">
                    Tentang Kami
                </a>

                <a href="{{ url('/kontak') }}" class="list-group-item list-group-item-action">
                    Kontak
                </a>

                <a href="{{ url('/kategori') }}" class="list-group-item list-group-item-action">
                    Kategori
                </a>

            </div>

        </div>

    </div>

</div>

@endsection