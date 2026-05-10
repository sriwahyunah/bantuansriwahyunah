@extends('layouts.app')

@section('title', 'Edit User')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Edit User</h1>
                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-warning">

                <div class="card-header">
                    <h3 class="card-title">Form Edit User</h3>
                </div>

                <form action="{{ route('user.update', $user->id) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="form-group">

                            <label>Nama</label>

                            <input type="text"
                                   name="name"
                                   value="{{ $user->name }}"
                                   class="form-control">

                        </div>

                        <div class="form-group">

                            <label>Email</label>

                            <input type="email"
                                   name="email"
                                   value="{{ $user->email }}"
                                   class="form-control">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                                class="btn btn-warning">

                            <i class="fas fa-edit"></i>
                            Update

                        </button>

                        <a href="{{ route('user.index') }}"
                           class="btn btn-secondary">

                            Kembali

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </section>

</div>

@endsection