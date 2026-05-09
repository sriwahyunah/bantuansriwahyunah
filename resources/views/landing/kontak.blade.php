@extends('landing.layout')

@section('title', 'Kontak')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Kontak Kami</h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6">

                    <h4>Informasi Kontak</h4>

                    <p>
                        Jika ada pertanyaan silakan hubungi kami.
                    </p>

                    <ul class="list-group">

                        <li class="list-group-item">
                            <strong>Email :</strong> admin@gmail.com
                        </li>

                        <li class="list-group-item">
                            <strong>Telepon :</strong> 08123456789
                        </li>

                        <li class="list-group-item">
                            <strong>Alamat :</strong> Indonesia
                        </li>

                    </ul>

                </div>

                <div class="col-md-6">

                    <h4>Kirim Pesan</h4>

                    <form>

                        <div class="mb-3">
                            <label>Nama</label>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Masukkan nama">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>

                            <input type="email"
                                   class="form-control"
                                   placeholder="Masukkan email">
                        </div>

                        <div class="mb-3">
                            <label>Pesan</label>

                            <textarea class="form-control"
                                      rows="5"
                                      placeholder="Tulis pesan"></textarea>
                        </div>

                        <button class="btn btn-primary">
                            Kirim Pesan
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection