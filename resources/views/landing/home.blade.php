@extends('layouts.guest')

@section('title', 'Sistem Bantuan Sosial')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

body{
    background:#eef3f8;
    font-family:'Poppins',sans-serif;
}

/* HERO */
.hero-section{
    margin-top:40px;
}

.hero-card{
    background:linear-gradient(135deg,#0d6efd,#4f8cff);
    border-radius:35px;
    padding:80px 70px;
    position:relative;
    overflow:hidden;
    color:white;
    box-shadow:0 20px 40px rgba(13,110,253,.2);
}

.hero-card::before{
    content:'';
    position:absolute;
    width:350px;
    height:350px;
    background:rgba(255,255,255,.08);
    border-radius:50%;
    right:-100px;
    top:-100px;
}

.hero-card::after{
    content:'';
    position:absolute;
    width:250px;
    height:250px;
    background:rgba(255,255,255,.05);
    border-radius:50%;
    bottom:-100px;
    right:100px;
}

.hero-title{
    font-size:68px;
    font-weight:800;
    line-height:1.1;
    margin-bottom:25px;
}

.hero-subtitle{
    font-size:24px;
    opacity:.95;
    margin-bottom:20px;
}

.hero-desc{
    font-size:18px;
    opacity:.9;
    line-height:1.8;
    margin-bottom:35px;
}

.btn-modern{
    background:white;
    color:#0d6efd;
    padding:14px 35px;
    border-radius:14px;
    font-weight:700;
    text-decoration:none;
    transition:.3s;
    display:inline-block;
    box-shadow:0 10px 20px rgba(0,0,0,.1);
}

.btn-modern:hover{
    transform:translateY(-3px);
    color:#0d6efd;
}

/* STATISTIK */
.stats-section{
    margin-top:40px;
}

.stats-card{
    background:white;
    padding:35px 20px;
    border-radius:25px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
    transition:.3s;
}

.stats-card:hover{
    transform:translateY(-8px);
}

.stats-card h2{
    color:#0d6efd;
    font-size:42px;
    font-weight:800;
}

.stats-card p{
    margin-top:10px;
    color:#64748b;
    font-weight:500;
}

/* BERITA */
.news-section{
    margin-top:50px;
}

.news-wrapper{
    background:white;
    border-radius:30px;
    padding:40px;
    box-shadow:0 10px 30px rgba(0,0,0,.05);
}

.section-title{
    font-size:38px;
    font-weight:800;
    margin-bottom:35px;
    color:#0f172a;
}

.berita-card{
    border:none;
    border-radius:25px;
    overflow:hidden;
    transition:.35s;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

.berita-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 35px rgba(0,0,0,.1);
}

.berita-image{
    height:240px;
    object-fit:cover;
    transition:.4s;
}

.berita-card:hover .berita-image{
    transform:scale(1.05);
}

.berita-body{
    padding:25px;
}

.berita-title{
    font-size:22px;
    font-weight:700;
    color:#0f172a;
    margin-bottom:15px;
    line-height:1.5;
}

.berita-text{
    color:#64748b;
    line-height:1.8;
    margin-top:15px;
}

.btn-detail{
    width:100%;
    border-radius:14px;
    padding:12px;
    background:linear-gradient(135deg,#0d6efd,#4f8cff);
    border:none;
    color:white;
    font-weight:600;
    text-decoration:none;
    display:inline-block;
    text-align:center;
    transition:.3s;
}

.btn-detail:hover{
    opacity:.95;
    color:white;
}

/* EMPTY */
.empty-news{
    text-align:center;
    padding:60px 20px;
}

.empty-news i{
    font-size:70px;
    color:#0d6efd;
    margin-bottom:20px;
}

/* RESPONSIVE */
@media(max-width:992px){

    .hero-card{
        padding:60px 40px;
    }

    .hero-title{
        font-size:50px;
    }

}

@media(max-width:768px){

    .hero-card{
        padding:45px 25px;
        border-radius:25px;
    }

    .hero-title{
        font-size:38px;
    }

    .hero-subtitle{
        font-size:20px;
    }

    .hero-desc{
        font-size:16px;
    }

    .section-title{
        font-size:28px;
    }

    .btn-modern{
        width:100%;
        text-align:center;
    }

}

</style>

{{-- HERO --}}
<section class="container hero-section">

    <div class="hero-card">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <h1 class="hero-title">
                    Sistem Bantuan Sosial
                </h1>

                <p class="hero-subtitle">
                    Website informasi dan pengajuan bantuan sosial masyarakat.
                </p>

                <hr class="border-light">

                <p class="hero-desc">
                    Kelola bantuan sosial dengan mudah,
                    cepat, transparan dan modern menggunakan
                    sistem digital.
                </p>

                <a href="{{ route('login.user') }}"
                   class="btn-modern">

                    <i class="fas fa-arrow-right me-2"></i>

                    Login User

                </a>

            </div>

            <div class="col-lg-5 text-center mt-4 mt-lg-0">

                <img src="https://cdn-icons-png.flaticon.com/512/4202/4202843.png"
                     style="width:100%; max-width:320px;">

            </div>

        </div>

    </div>

</section>

{{-- STATISTIK --}}
<section class="container stats-section">

    <div class="row g-4">

        <div class="col-md-3">

            <div class="stats-card">

                <h2>250+</h2>

                <p>Penerima Bantuan</p>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stats-card">

                <h2>120+</h2>

                <p>Pengajuan Diproses</p>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stats-card">

                <h2>95%</h2>

                <p>Verifikasi Berhasil</p>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stats-card">

                <h2>24/7</h2>

                <p>Layanan Online</p>

            </div>

        </div>

    </div>

</section>

{{-- BERITA --}}
<section class="container news-section pb-5">

    <div class="news-wrapper">

        <h2 class="section-title">

            <i class="fas fa-newspaper text-primary me-2"></i>

            Berita Terbaru

        </h2>

        @if($berita->count() > 0)

            <div class="row">

                @foreach($berita as $item)

                    <div class="col-md-4 mb-4">

                        <div class="card berita-card h-100">

                            {{-- GAMBAR --}}
                            <img src="{{ asset('uploads/berita/' . $item->gambar) }}"
                                 class="berita-image">

                            {{-- BODY --}}
                            <div class="berita-body">

                                <span class="badge bg-primary mb-3">
                                    Informasi
                                </span>

                                <h5 class="berita-title">
                                    {{ $item->judul }}
                                </h5>

                                <small class="text-muted">

                                    <i class="fas fa-calendar-alt me-1"></i>

                                    {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}

                                </small>

                                <p class="berita-text">

                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 120) }}

                                </p>

                            </div>

                            {{-- FOOTER --}}
                            <div class="px-4 pb-4">

                                <a href="{{ route('detail.berita', $item->slug) }}"
                                   class="btn-detail">

                                    Baca Selengkapnya

                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="empty-news">

                <i class="fas fa-newspaper"></i>

                <h3 class="fw-bold">
                    Data berita belum tersedia
                </h3>

                <p class="text-muted">
                    Silakan kembali lagi nanti untuk melihat informasi terbaru.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection