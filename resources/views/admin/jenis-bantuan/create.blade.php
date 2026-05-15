@extends('layouts.admin')

@section('title', 'Tambah Jenis Bantuan')

@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h1>

                Tambah Jenis Bantuan

            </h1>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-success card-outline">

                <div class="card-body">

                    <form action="{{ route('jenis-bantuan.store') }}"
                          method="POST">

                        @csrf

                        <div class="form-group">

                            <label>
                                Kode Jenis
                            </label>

                            <input type="text"
                                   name="kode_jenis"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="form-group">

                            <label>
                                Nama Jenis Bantuan
                            </label>

                            <input type="text"
                                   name="nama_jenis"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="form-group">

                            <label>
                                Deskripsi
                            </label>

                            <textarea name="deskripsi"
                                      class="form-control"
                                      rows="4"></textarea>

                        </div>

                        <div class="form-group">

                            <label>
                                Status
                            </label>

                            <select name="status"
                                    class="form-control">

                                <option value="aktif">

                                    Aktif

                                </option>

                                <option value="nonaktif">

                                    Nonaktif

                                </option>

                            </select>

                        </div>

                        <button type="submit"
                                class="btn btn-success">

                            <i class="fas fa-save"></i>
                            Simpan

                        </button>

                        <a href="{{ route('jenis-bantuan.index') }}"
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