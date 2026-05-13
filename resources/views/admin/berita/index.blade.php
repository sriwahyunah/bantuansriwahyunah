@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')

<div class="card">

    <div class="card-body">

        <form action="{{ route('berita.update', $berita->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Judul</label>
                <input type="text"
                       name="judul"
                       value="{{ $berita->judul }}"
                       class="form-control">
            </div>

            <div class="form-group">
                <label>Isi</label>
                <textarea name="isi"
                          rows="8"
                          class="form-control">{{ $berita->isi }}</textarea>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file"
                       name="gambar"
                       class="form-control">
            </div>

            <button type="submit" class="btn btn-success">
                Update
            </button>

        </form>

    </div>

</div>

@endsection