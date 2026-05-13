{{-- resources/views/landing/index.blade.php --}}

@extends('layouts.guest')

@section('title', 'Sistem Bantuan Sosial')

@section('content')

<style>
    body{
        background: #f4f7fb;
        font-family: 'Segoe UI', sans-serif;
    }

    /* NAVBAR */
    .navbar-custom{
        background: linear-gradient(90deg, #0d6efd, #3b82f6);
        padding: 14px 0;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .navbar-custom .navbar-brand{
        color: white;
        font-size: 28px;
        font-weight: 700;
    }

    .navbar-custom .nav-link{
        color: white !important;
        margin-left: 20px;
        font-weight: 500;
        transition: 0.3s;
    }

    .navbar-custom .nav-link:hover{
        transform: translateY(-2px);
        opacity: .9;
    }

    /* HERO */
    .hero-section{
        margin-top: 40px;
    }

    .hero-card{
        background: linear-gradient(135deg, #0d6efd, #4f8cff);
        border-radius: 25px;
        padding: 70px 60px;
        color: white;
        overflow: hidden;
        position: relative;
        box-shadow: 0 10px 30px rgba(13,110,253,0.25);
    }

    .hero-card::before{
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255,255,255,0.08);
        border-radius: 50%;
        right: -100px;
        top: -80px;
    }

    .hero-card::after{
        content: '';
        position: absolute;
        width: 220px;
        height: 220px;
        background: rgba(255,255,255,0.05);
        border-radius: 50%;
        right: 80px;
        bottom: -100px;
    }

    .hero-title{
        font-size: 64px;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 20px;
    }

    .hero-subtitle{
        font-size: 24px;
        opacity: .95;
        margin-bottom: 20px;
    }

    .hero-desc{
        font-size: 18px;
        opacity: .9;
        margin-bottom: 35px;
    }

    .btn-modern{
        background: white;
        color: #0d6efd;
        border-radius: 12px;
        padding: 14px 30px;
        font-size: 18px;
        font-weight: 600;
        border: none;
        transition: .3s;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .btn-modern:hover{
        transform: translateY(-3px);
        background: #f8f9fa;
    }

    /* CARD BERITA */
    .news-section{
        margin-top: 40px;
    }

    .news-card{
        background: white;
        border-radius: 20px;
        padding: 35px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.06);
    }

    .section-title{
        font-size: 34px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 30px;
    }

    .empty-news{
        border: 2px dashed #dbeafe;
        border-radius: 18px;
        padding: 60px 20px;
        text-align: center;
        background: #f8fbff;
    }

    .empty-news i{
        font-size: 60px;
        color: #3b82f6;
        margin-bottom: 20px;
    }

    .empty-news h4{
        font-weight: 700;
        color: #334155;
    }

    .empty-news p{
        color: #64748b;
    }

    /* RESPONSIVE */
    @media(max-width:768px){

        .hero-card{
            padding: 40px 30px;
        }

        .hero-title{
            font-size: 42px;
        }

        .hero-subtitle{
            font-size: 20px;
        }

        .section-title{
            font-size: 28px;
        }
    }
</style>



               
{{-- HERO --}}
<div class="container hero-section">

    <div class="hero-card">

        <div class="row align-items-center">

            <div class="col-md-8">

                <h1 class="hero-title">
                    Sistem Bantuan Sosial
                </h1>

                <p class="hero-subtitle">
                    Website informasi dan pengajuan bantuan sosial masyarakat.
                </p>

                <hr class="border-light">

                <p class="hero-desc">
                    Kelola bantuan sosial dengan mudah, cepat, transparan,
                    dan modern menggunakan sistem digital.
                </p>

                <a href="#" class="btn btn-modern">
                    <i class="fas fa-arrow-right me-2"></i>
                    Login User
                </a>

            </div>

            <div class="col-md-4 text-center d-none d-md-block">

                <i class="fas fa-hand-holding-heart"
                   style="font-size: 180px; opacity: .15;">
                </i>

            </div>

        </div>

    </div>

</div>

{{-- BERITA --}}
<div class="container news-section">

    <div class="news-card">

        <h2 class="section-title">
            <i class="far fa-newspaper text-primary me-2"></i>
            Berita Terbaru
        </h2>

        <div class="empty-news">

            <i class="far fa-file-alt"></i>

            <h4>Data berita belum tersedia.</h4>

            <p>
                Silakan kembali lagi nanti untuk melihat informasi terbaru.
            </p>

        </div>

    </div>

</div>

@endsection