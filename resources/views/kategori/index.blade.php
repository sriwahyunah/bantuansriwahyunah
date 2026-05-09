@extends('landing.layout')

@section('title', 'Kategori')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Daftar Kategori Bantuan</h3>
        </div>

        <div class="card-body">

            <div class="row">

                @foreach($kategori as $k)

                    <div class="col-md-4 mb-4">

                        <div class="card h-100 border-primary">

                            <div class="card-body">

                                <h4>{{ $k['nama'] }}</h4>

                                <p>
                                    {{ $k['deskripsi'] }}
                                </p>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</div>

@endsection