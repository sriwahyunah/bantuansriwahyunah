@extends('layouts.admin')

@section('title', 'Data Pengajuan')

@section('content')

<div class="content-wrapper">

<section class="content-header">

<div class="container-fluid">

<div class="row mb-2">

<div class="col-sm-6">

<h1>Data Pengajuan</h1>

</div>

<div class="col-sm-6 text-right">

<a href="{{ route('admin.pengajuan.create') }}"
   class="btn btn-primary">

Tambah Pengajuan

</a>

</div>

</div>

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

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="bg-primary">

<tr>

<th>No</th>

<th>ID Penerima</th>

<th>Judul</th>

<th>Deskripsi</th>

<th>File</th>

<th>Status</th>

<th width="200">Aksi</th>

</tr>

</thead>

<tbody>

@forelse($pengajuans as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->id_penerima }}</td>

<td>{{ $item->judul }}</td>

<td>{{ $item->deskripsi }}</td>

<td>

@if($item->file)

<a href="{{ asset('uploads/pengajuan/'.$item->file) }}"
   target="_blank">

Lihat File

</a>

@endif

</td>

<td>{{ $item->status }}</td>

<td>

<a href="{{ route('admin.pengajuan.show', $item->id) }}"
   class="btn btn-info btn-sm">

Detail

</a>

<a href="{{ route('admin.pengajuan.edit', $item->id) }}"
   class="btn btn-warning btn-sm">

Edit

</a>

<form action="{{ route('admin.pengajuan.destroy', $item->id) }}"
      method="POST"
      class="d-inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
        onclick="return confirm('Hapus data?')">

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="7"
    class="text-center">

Data pengajuan kosong

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