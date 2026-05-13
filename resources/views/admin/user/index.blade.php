@extends('layouts.admin')

@section('title', 'Data User')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Data User</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            <div class="card">

                <div class="card-header bg-primary">

                    <h3 class="card-title">

                        Data User

                    </h3>

                </div>

                <div class="card-body">

                    <table class="table table-bordered table-hover">

                        <thead>

                        <tr>

                            <th>No</th>

                            <th>Nama</th>

                            <th>Email</th>

                            <th width="200">

                                Aksi

                            </th>

                        </tr>

                        </thead>

                        <tbody>

                        @foreach($users as $item)

                            <tr>

                                <td>

                                    {{ $loop->iteration }}

                                </td>

                                <td>

                                    {{ $item->name }}

                                </td>

                                <td>

                                    {{ $item->email }}

                                </td>

                                <td>

                                    {{-- DETAIL --}}
                                    <a href="{{ route('user.show', $item->id) }}"
                                       class="btn btn-info btn-sm">

                                        <i class="fas fa-eye"></i>

                                    </a>

                                    {{-- EDIT --}}
                                    <a href="{{ route('user.edit', $item->id) }}"
                                       class="btn btn-warning btn-sm">

                                        <i class="fas fa-edit"></i>

                                    </a>

                                    {{-- DELETE --}}
                                    <form action="{{ route('user.destroy', $item->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin hapus data?')">

                                            <i class="fas fa-trash"></i>

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection