@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Edit User</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-body">

                    <form action="{{ route('user.update', $user->id) }}"
                          method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">

                            <label>Nama</label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ $user->name }}">

                        </div>

                        <div class="form-group">

                            <label>Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{ $user->email }}">

                        </div>

                        <button class="btn btn-primary">

                            Update

                        </button>

                        <a href="{{ route('user.index') }}"
                           class="btn btn-secondary">

                            Kembali

                        </a>

                    </form>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection