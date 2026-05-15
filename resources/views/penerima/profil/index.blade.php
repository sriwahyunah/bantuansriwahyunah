@extends('layouts.penerima')

@section('title', 'Profil Penerima')

@section('content')

<div class="container py-4">

    <div class="row">

        {{-- CARD FOTO --}}
        <div class="col-md-4">

            <div class="card shadow border-0 text-center p-3">

                <img src="{{ asset('uploads/penerima/' . ($penerima->foto ?? 'default.png')) }}"
                     class="rounded-circle mx-auto"
                     width="120"
                     height="120"
                     style="object-fit: cover;">

                <h5 class="mt-2">{{ $penerima->nama ?? '-' }}</h5>
                <small>Penerima Bantuan</small>

                <hr>

                <span class="badge bg-success">
                    {{ $penerima->status ?? 'aktif' }}
                </span>

            </div>

        </div>

        {{-- DATA --}}
        <div class="col-md-8">

            <div class="card shadow border-0">

                <div class="card-header bg-primary text-white">
                    Data Profil
                </div>

                <div class="card-body">

                    <div class="mb-2">
                        <label>NIK</label>
                        <input class="form-control" value="{{ $penerima->nik ?? '-' }}" readonly>
                    </div>

                    <div class="mb-2">
                        <label>KK</label>
                        <input class="form-control" value="{{ $penerima->kk ?? '-' }}" readonly>
                    </div>

                    <div class="mb-2">
                        <label>Username</label>
                        <input class="form-control" value="{{ $penerima->username ?? '-' }}" readonly>
                    </div>

                    <div class="mb-2">
                        <label>Telepon</label>
                        <input class="form-control" value="{{ $penerima->telepon ?? '-' }}" readonly>
                    </div>

                    <div class="mb-2">
                        <label>Status Verifikasi</label>
                        <input class="form-control" value="{{ $penerima->status_verifikasi ?? '-' }}" readonly>
                    </div>

                    <a href="{{ route('penerima.dashboard') }}" class="btn btn-secondary mt-3">
                        Kembali
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection