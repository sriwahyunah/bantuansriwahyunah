@extends('landing.layout')

@section('title', $artikel->judul)

@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">

        <div class="card">

            <div class="card-body">

                {{-- JUDUL --}}
                <h2 class="mb-2">
                    {{ $artikel->judul }}
                </h2>

                {{-- INFO --}}
                <p class="text-muted">
                    <i class="fas fa-tag"></i>
                    {{ $artikel->kategori->nama ?? 'Tanpa Kategori' }}
                    |
                    <i class="fas fa-calendar"></i>
                    {{ $artikel->created_at->format('d M Y') }}
                </p>

                <hr>

                {{-- GAMBAR --}}
                @if($artikel->gambar)
                    <img src="{{ asset('storage/'.$artikel->gambar) }}"
                         class="img-fluid mb-3"
                         style="max-height:400px; object-fit:cover; width:100%;">
                @endif

                {{-- ISI --}}
                <div style="line-height:1.8; font-size:16px;">
                    {!! $artikel->isi !!}
                </div>

                <hr>

                {{-- BUTTON BACK --}}
                <a href="{{ url('/') }}" class="btn btn-secondary mt-3">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>

            </div>

        </div>

    </div>
</div>

@endsection