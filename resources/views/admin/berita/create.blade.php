@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')

<div class="card">

    <div class="card-body">

        <form action="{{ route('berita.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label>Judul</label>
                <input type="text"
                       name="judul"
                       class="form-control"
                       required>
            </div>

            <div class="form-group">
                <label>Isi Berita</label>
                <textarea name="isi"
                          rows="8"
                          class="form-control"
                          required></textarea>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file"
                       name="gambar"
                       class="form-control">
            </div>

            <div class="form-group">
                <label>Status</label>

                <select name="status" class="form-control">
                    <option value="publish">Publish</option>
                    <option value="draft">Draft</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection