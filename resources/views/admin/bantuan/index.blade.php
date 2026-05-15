@extends('layouts.admin')

@section('title', 'Data Bantuan')

@section('content')

<div class="content-wrapper">

    {{-- HEADER --}}
    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>

                        <i class="fas fa-hand-holding-heart"></i>
                        Data Bantuan

                    </h1>

                </div>

            </div>

        </div>

    </section>

    {{-- CONTENT --}}
    <section class="content">

        <div class="container-fluid">

            <div class="card card-success card-outline">

                <div class="card-header">

                    <h3 class="card-title">

                        Daftar Bantuan Sosial

                    </h3>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-bordered table-hover">

                        <thead class="bg-light">

                            <tr>

                                <th width="5%">
                                    No
                                </th>

                                <th>
                                    Kode Bantuan
                                </th>

                                <th>
                                    Nama Bantuan
                                </th>

                                <th>
                                    Total Kuota
                                </th>

                                <th>
                                    Terdistribusi
                                </th>

                                <th>
                                    Status
                                </th>

                                <th width="15%">
                                    Aksi
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($bantuan as $item)

                            <tr>

                                <td>

                                    {{ $loop->iteration }}

                                </td>

                                <td>

                                    <span class="badge badge-info">

                                        {{ $item->kode_bantuan }}

                                    </span>

                                </td>

                                <td>

                                    {{ $item->nama_bantuan }}

                                </td>

                                <td>

                                    {{ $item->total_kuota }}

                                </td>

                                <td>

                                    {{ $item->terdistribusi }}

                                </td>

                                <td>

                                    @if($item->status == 'aktif')

                                        <span class="badge badge-success">

                                            Aktif

                                        </span>

                                    @else

                                        <span class="badge badge-danger">

                                            Nonaktif

                                        </span>

                                    @endif

                                </td>

                                <td>

                                    <a href="{{ route('bantuan.detail', $item->id) }}"
                                       class="btn btn-info btn-sm">

                                        <i class="fas fa-eye"></i>
                                        Detail

                                    </a>

                                </td>

                            </tr>

                            @empty

                            <tr>

                                <td colspan="7"
                                    class="text-center">

                                    Data bantuan belum tersedia

                                </td>

                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection