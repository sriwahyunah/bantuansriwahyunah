@extends('layouts.admin')

@section('title', 'Edit Pengajuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>Edit Pengajuan</h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-header bg-warning">

                    <h3 class="card-title">

                        Form Edit Pengajuan

                    </h3>

                </div>

                <form action="{{ url('/pengajuan/' . $pengajuan->id . '/update') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        {{-- ID PENERIMA --}}
                        <div class="form-group">

                            <label>ID Penerima</label>

                            <input type="text"
                                   name="id_penerima"
                                   class="form-control"
                                   value="{{ $pengajuan->id_penerima }}"
                                   required>

                        </div>

                        {{-- JUDUL --}}
                        <div class="form-group">

                            <label>Judul</label>

                            <input type="text"
                                   name="judul"
                                   class="form-control"
                                   value="{{ $pengajuan->judul }}"
                                   required>

                        </div>

                        {{-- DESKRIPSI --}}
                        <div class="form-group">

                            <label>Deskripsi</label>

                            <textarea name="deskripsi"
                                      class="form-control"
                                      rows="5"
                                      required>{{ $pengajuan->deskripsi }}</textarea>

                        </div>

                        {{-- FILE --}}
                        <div class="form-group">

                            <label>File</label>

                            <input type="file"
                                   name="file"
                                   class="form-control">

                            @if($pengajuan->file)

                                <div class="mt-2">

                                    <a href="{{ asset('uploads/pengajuan/' . $pengajuan->file) }}"
                                       target="_blank">

                                        Lihat File Lama

                                    </a>

                                </div>

                            @endif

                        </div>

                        {{-- STATUS --}}
                        <div class="form-group">

                            <label>Status</label>

                            <select name="status"
                                    class="form-control"
                                    required>

                                <option value="pending"
                                    {{ $pengajuan->status == 'pending' ? 'selected' : '' }}>

                                    Pending

                                </option>

                                <option value="disetujui"
                                    {{ $pengajuan->status == 'disetujui' ? 'selected' : '' }}>

                                    Disetujui

                                </option>

                                <option value="ditolak"
                                    {{ $pengajuan->status == 'ditolak' ? 'selected' : '' }}>

                                    Ditolak

                                </option>

                            </select>

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit"
                                class="btn btn-warning">

                            <i class="fas fa-save"></i>
                            Update

                        </button>

                        <a href="{{ url('/pengajuan') }}"
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