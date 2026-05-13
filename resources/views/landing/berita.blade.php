@extends('layouts.guest')

@section('title', 'Berita')

@section('content')

<div class="container mt-4">

    <div class="row">

        @foreach ($beritas as $item)

        <div class="col-md-4">

            <div class="card mb-4">

                <img src="{{ asset('uploads/berita/' . $item->gambar) }}"
                     class="card-img-top"
                     height="220"
                     style="object-fit:cover;">

                <div class="card-body">

                    <h5>

                        {{ $item->judul }}

                    </h5>

                    <p>

                        {{ Str::limit($item->isi, 120) }}

                    </p>

                    <a href="{{ route('landing.detailberita', $item->slug) }}"
                       class="btn btn-info btn-sm">

                        Detail

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection