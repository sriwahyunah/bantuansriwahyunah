@extends('layouts.guest')

@section('content')

<div class="container py-5">

    <div class="card border-0 shadow rounded-4">

        {{-- GAMBAR --}}
        <img src="{{ asset('uploads/berita/' . $berita->gambar) }}"
             class="card-img-top"
             style="height:450px; object-fit:cover;">

        <div class="card-body p-5">

            {{-- JUDUL --}}
            <h1 class="fw-bold mb-3">
                {{ $berita->judul }}
            </h1>

            {{-- TANGGAL --}}
            <p class="text-muted mb-4">

                <i class="fas fa-calendar-alt"></i>

                {{ $berita->created_at->format('d F Y') }}

            </p>

            {{-- ISI --}}
            <div class="text-secondary fs-5" style="line-height:1.9;">

                {!! nl2br(e($berita->isi)) !!}

            </div>

        </div>

    </div>

</div>

@endsection