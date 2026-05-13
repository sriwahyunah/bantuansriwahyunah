@extends('layouts.guest')

@section('title', 'Detail Berita')

@section('content')

<div class="container mt-4">

    <div class="card">

        <img src="{{ asset('uploads/berita/' . $berita->gambar) }}"
             class="card-img-top"
             style="max-height:400px; object-fit:cover;">

        <div class="card-body">

            <h2>

                {{ $berita->judul }}

            </h2>

            <small class="text-muted">

                {{ $berita->created_at->format('d M Y') }}

            </small>

            <hr>

            <p>

                {!! nl2br(e($berita->isi)) !!}

            </p>

        </div>

    </div>

</div>

@endsection