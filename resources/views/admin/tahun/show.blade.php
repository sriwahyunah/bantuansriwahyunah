@extends('layouts.app')

@section('title', 'Detail Tahun')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">
            <h1>Detail Tahun</h1>
        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">
                        Informasi Tahun
                    </h3>
                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>
                            <th width="20%">Tahun</th>
                            <td>{{ $tahun->nama }}</td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection