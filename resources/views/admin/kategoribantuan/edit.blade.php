@extends('layouts.appuser')

@section('title', 'Edit Kategori Bantuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>Edit Kategori Bantuan</h1>
        </div>
    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-warning">

                <div class="card-header">
                    <h3 class="card-title">
                        Form Edit Kategori
                    </h3>
                </div>

                <form action="{{ route('kategoribantuan.update', $kategori->id) }}"
                    method="POST">

                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="form-group">

                            <label>Nama Kategori</label>

                            <input type="text"
                                name="nama"
                                value="{{ $kategori->nama }}"
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