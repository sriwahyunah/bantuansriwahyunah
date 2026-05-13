@extends('layouts.guest')

@section('title', 'Kategori Berita')

@section('content')

<div class="container mt-4">

    <h3 class="mb-4">

        Kategori :
        {{ $kategori->nama_kategori }}

    </h3>

    <div class="row">

        @foreach ($beritas as $item)

        <div class="col-md-4">

            <div class="card mb-4">

                <div class="card-body">

                    <h5>

                        {{ $item->judul }}

                    </h5>

                    <p>

                        {{ Str::limit($item->isi, 100) }}

                    </p>

                    <a href="{{ route('landing.detailberita', $item->slug) }}"
                       class="btn btn-primary btn-sm">

                        Detail

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection