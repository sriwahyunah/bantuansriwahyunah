@extends('layouts.admin')

@section('title', 'Detail User')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Detail User</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>

                            <th width="200">

                                Nama

                            </th>

                            <td>

                                {{ $user->name }}

                            </td>

                        </tr>

                        <tr>

                            <th>Email</th>

                            <td>

                                {{ $user->email }}

                            </td>

                        </tr>

                    </table>

                    <a href="{{ route('user.index') }}"
                       class="btn btn-secondary">

                        Kembali

                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection