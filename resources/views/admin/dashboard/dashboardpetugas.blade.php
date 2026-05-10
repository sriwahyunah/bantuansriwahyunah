@extends('layouts.app')

@section('title', 'Dashboard Petugas')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Dashboard Petugas</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Selamat Datang</h3>
                </div>
                <div class="card-body">
                    <h5>Halo, {{ Auth::user()->nama ?? 'Petugas' }}</h5>
                    <p>Selamat datang di sistem Bantuan UNA.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection