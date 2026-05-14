@extends('layouts.penerima')

@section('title', 'Dashboard Penerima')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

body{
    background:#eef3f8;
    font-family:'Poppins',sans-serif;
}

/* HEADER */
.dashboard-header{
    background:linear-gradient(135deg,#0d6efd,#4f8cff);
    border-radius:30px;
    padding:40px;
    color:white;
    position:relative;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(13,110,253,.2);
}

.dashboard-header::before{
    content:'';
    position:absolute;
    width:300px;
    height:300px;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    top:-100px;
    right:-100px;
}

.dashboard-header h1{
    font-size:42px;
    font-weight:800;
}

.dashboard-header p{
    opacity:.9;
    font-size:17px;
}

/* CARD */
.dashboard-card{
    background:white;
    border-radius:25px;
    padding:30px;
    transition:.3s;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
    height:100%;
}

.dashboard-card:hover{
    transform:translateY(-8px);
}

.dashboard-icon{
    width:70px;
    height:70px;
    border-radius:20px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:30px;
    margin-bottom:20px;
}

.bg-primary-soft{
    background:rgba(13,110,253,.1);
    color:#0d6efd;
}

.bg-success-soft{
    background:rgba(25,135,84,.1);
    color:#198754;
}

.bg-warning-soft{
    background:rgba(255,193,7,.15);
    color:#ff9800;
}

.bg-danger-soft{
    background:rgba(220,53,69,.1);
    color:#dc3545;
}

.dashboard-card h4{
    font-size:18px;
    color:#64748b;
    margin-bottom:10px;
}

.dashboard-card h2{
    font-size:38px;
    font-weight:800;
    color:#0f172a;
}

/* MENU */
.menu-card{
    background:white;
    border-radius:25px;
    padding:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

.menu-btn{
    width:100%;
    border:none;
    border-radius:18px;
    padding:18px;
    background:#f8fbff;
    transition:.3s;
    text-decoration:none;
    display:block;
    color:#0f172a;
    font-weight:600;
}

.menu-btn:hover{
    background:#0d6efd;
    color:white;
    transform:translateY(-5px);
}

.menu-btn i{
    font-size:28px;
    margin-bottom:10px;
    display:block;
}

/* TABLE */
.riwayat-card{
    background:white;
    border-radius:25px;
    padding:30px;
    margin-top:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
}

.table{
    margin-bottom:0;
}

.table th{
    background:#f8fbff;
    color:#0f172a;
    border:none;
}

.table td{
    vertical-align:middle;
}

/* RESPONSIVE */
@media(max-width:768px){

    .dashboard-header{
        padding:30px;
    }

    .dashboard-header h1{
        font-size:30px;
    }

}

</style>

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="dashboard-header mb-4">

        <div class="row align-items-center">

            <div class="col-md-8">

                <h1>
                    Dashboard Penerima
                </h1>

                <p>
                    Selamat datang di sistem bantuan sosial.
                    Kelola pengajuan bantuan dengan mudah dan cepat.
                </p>

            </div>

            <div class="col-md-4 text-end d-none d-md-block">

                <i class="fas fa-hand-holding-heart"
                   style="font-size:120px; opacity:.15;">
                </i>

            </div>

        </div>

    </div>

    {{-- CARD STATISTIK --}}
    <div class="row g-4">

        <div class="col-md-3">

            <div class="dashboard-card">

                <div class="dashboard-icon bg-primary-soft">

                    <i class="fas fa-file-alt"></i>

                </div>

                <h4>Total Pengajuan</h4>

                <h2>12</h2>

            </div>

        </div>

        <div class="col-md-3">

            <div class="dashboard-card">

                <div class="dashboard-icon bg-success-soft">

                    <i class="fas fa-check-circle"></i>

                </div>

                <h4>Pengajuan Disetujui</h4>

                <h2>8</h2>

            </div>

        </div>

        <div class="col-md-3">

            <div class="dashboard-card">

                <div class="dashboard-icon bg-warning-soft">

                    <i class="fas fa-clock"></i>

                </div>

                <h4>Menunggu Verifikasi</h4>

                <h2>3</h2>

            </div>

        </div>

        <div class="col-md-3">

            <div class="dashboard-card">

                <div class="dashboard-icon bg-danger-soft">

                    <i class="fas fa-times-circle"></i>

                </div>

                <h4>Ditolak</h4>

                <h2>1</h2>

            </div>

        </div>

    </div>

    {{-- MENU --}}
    <div class="menu-card mt-4">

        <div class="row g-4">

            <div class="col-md-3">

                <a href="#" class="menu-btn">

                    <i class="fas fa-file-signature"></i>

                    Ajukan Bantuan

                </a>

            </div>

            <div class="col-md-3">

                <a href="#" class="menu-btn">

                    <i class="fas fa-history"></i>

                    Riwayat Pengajuan

                </a>

            </div>

            <div class="col-md-3">

                <a href="#" class="menu-btn">

                    <i class="fas fa-user"></i>

                    Profil Saya

                </a>

            </div>

            <div class="col-md-3">

                <a href="#" class="menu-btn">

                    <i class="fas fa-newspaper"></i>

                    Informasi Bantuan

                </a>

            </div>

        </div>

    </div>

    {{-- RIWAYAT --}}
    <div class="riwayat-card">

        <h4 class="fw-bold mb-4">

            <i class="fas fa-clock me-2 text-primary"></i>

            Riwayat Pengajuan Terbaru

        </h4>

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead>

                    <tr>

                        <th>No</th>
                        <th>Jenis Bantuan</th>
                        <th>Tanggal</th>
                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>1</td>

                        <td>Bantuan Pendidikan</td>

                        <td>14 Mei 2026</td>

                        <td>

                            <span class="badge bg-success">
                                Disetujui
                            </span>

                        </td>

                    </tr>

                    <tr>

                        <td>2</td>

                        <td>Bantuan UMKM</td>

                        <td>10 Mei 2026</td>

                        <td>

                            <span class="badge bg-warning text-dark">
                                Diproses
                            </span>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection