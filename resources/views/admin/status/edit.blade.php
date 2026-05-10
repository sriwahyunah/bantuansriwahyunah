@extends('layouts.app')

@section('title', 'Edit Status')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">
            <h1>Edit Status</h1>
        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-warning">

                <div class="card-header">
                    <h3 class="card-title">
                        Form Edit Status
                    </h3>
                </div>

                <form action="{{ route('status.update', $status->id) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="form-group">

                            <label>Nama Status</label>

                            <input type="text"
                                   name="nama"
                                   value="{{ $status->nama }}"
                                   class="form-control">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                                class="btn btn-warning">

                            <i class="fas fa-edit"></i>
                            Update

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>

</div>

@endsection