@extends('layouts.appuser')

@section('title', 'Bukti Penyaluran')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">
            <h1>Bukti Penyaluran</h1>
        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">
                        Bukti Penyaluran Bantuan
                    </h3>
                </div>

                <div class="card-body text-center">

                    <img src="{{ asset('uploads/penyaluran/'.$bukti->foto) }}"
                        class="img-fluid">

                </div>

            </div>

        </div>

    </section>

</div>

@endsection