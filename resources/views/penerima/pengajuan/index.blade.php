@extends('layouts.penerima')

@section('title', 'Pengajuan Bantuan')

@section('content')

<div class="container-fluid">

    <div class="card border-0 shadow-lg">

        <div class="card-header bg-primary text-white">

            <h5 class="mb-0">
                Form Pengajuan Bantuan
            </h5>

        </div>

        <div class="card-body">

            <form action="/penerima/pengajuan"
                  method="POST">

                @csrf

                <div class="form-group">

                    <label>Jenis Bantuan</label>

                    <select name="jenis_bantuan"
                            class="form-control">

                        <option value="">
                            -- Pilih Bantuan --
                        </option>

                        <option value="PKH">
                            PKH
                        </option>

                        <option value="BLT">
                            BLT
                        </option>

                        <option value="Pendidikan">
                            Pendidikan
                        </option>

                    </select>

                </div>

                <div class="form-group">

                    <label>Keterangan</label>

                    <textarea name="keterangan"
                              rows="5"
                              class="form-control"></textarea>

                </div>

                <button class="btn btn-primary">

                    <i class="fas fa-paper-plane"></i>

                    Kirim Pengajuan

                </button>

            </form>

        </div>

    </div>

</div>

@endsection