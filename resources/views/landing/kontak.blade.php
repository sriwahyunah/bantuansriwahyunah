@extends('layouts.guest')

@section('title', 'Kontak')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">

                    <h3>

                        Hubungi Kami

                    </h3>

                </div>

                <div class="card-body">

                    <form>

                        <div class="form-group">

                            <label>Nama</label>

                            <input type="text"
                                   class="form-control">

                        </div>

                        <div class="form-group">

                            <label>Email</label>

                            <input type="email"
                                   class="form-control">

                        </div>

                        <div class="form-group">

                            <label>Pesan</label>

                            <textarea class="form-control"
                                      rows="5"></textarea>

                        </div>

                        <button type="submit"
                                class="btn btn-primary">

                            Kirim Pesan

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection