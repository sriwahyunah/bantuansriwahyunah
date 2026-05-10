@extends('layouts.app')

@section('title', 'Edit Penerima')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">
            <h1>Edit Penerima</h1>
        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-warning">

                <div class="card-header">
                    <h3 class="card-title">
                        Form Edit Penerima
                    </h3>
                </div>

                <form action="{{ route('penerima.update', $penerima->id) }}"
                    method="POST">

                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="form-group">

                            <label>Nama</label>

                            <input type="text"
                                name="nama"
                                value="{{ $penerima->nama }}"
                                class="form-control">

                        </div>

                        <div class="form-group">

                            <label>NIP</label>

                            <input type="text"
                                name="nip"
                                value="{{ $penerima->nip }}"
                                class="form-control">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                            class="btn btn-warning">

                            Update

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>

</div>

@endsection