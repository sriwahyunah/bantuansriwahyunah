@extends('landing.layout')

@section('title', 'Home')

@section('content')

<div class="container py-4">

    {{-- HEADER --}}
    <div class="text-center mb-5">

        <h1 class="fw-bold">
            Website Bantuan Sosial
        </h1>

        <p class="text-muted">
            Bersama membantu masyarakat yang membutuhkan
        </p>

    </div>

    {{-- LIST PROGRAM --}}
    <div class="row">

        @forelse($program as $p)

            <div class="col-md-4 mb-4">

                <div class="card card-primary card-outline shadow-sm h-100">

                    {{-- GAMBAR --}}
                    @if(!empty($p->gambar))

                        <img
                            src="{{ asset('images/'.$p->gambar) }}"
                            class="card-img-top"
                            style="height:220px; object-fit:cover;"
                        >

                    @else

                        <img
                            src="https://via.placeholder.com/400x220?text=Program+Bantuan"
                            class="card-img-top"
                            style="height:220px; object-fit:cover;"
                        >

                    @endif

                    <div class="card-body d-flex flex-column">

                        {{-- JUDUL --}}
                        <h5 class="card-title fw-bold">
                            {{ $p->judul }}
                        </h5>

                        {{-- DESKRIPSI --}}
                        <p class="card-text text-muted">
                            {{ \Illuminate\Support\Str::limit($p->deskripsi, 100) }}
                        </p>

                        {{-- BUTTON --}}
                        <a
                            href="{{ url('/program/'.$p->id) }}"
                            class="btn btn-primary mt-auto"
                        >
                            <i class="fas fa-info-circle"></i>
                            Lihat Detail
                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">

                <div class="alert alert-warning text-center">

                    Belum ada program bantuan.

                </div>

            </div>

        @endforelse

    </div>

</div>

@endsection