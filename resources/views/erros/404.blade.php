@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')

<div class="content-wrapper">

    <section class="content">

        <div class="container-fluid">

            <div class="error-page">

                <h2 class="headline text-warning">
                    404
                </h2>

                <div class="error-content">

                    <h3>
                        <i class="fas fa-exclamation-triangle text-warning"></i>
                        Halaman Tidak Ditemukan
                    </h3>

                    <p>
                        URL yang Anda akses tidak tersedia.
                    </p>

                    <a href="{{ url('/dashboard') }}"
                       class="btn btn-primary">

                        Kembali ke Dashboard

                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection