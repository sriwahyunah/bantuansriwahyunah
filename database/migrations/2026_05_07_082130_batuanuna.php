<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {

        /*
        | ROLE PENGGUNA
        */
        Schema::create('peran_pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        /*
        | ALAMAT
        */
        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->string('jalan')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('negara')->default('Indonesia');
            $table->timestamps();
        });

        /*
        | PENGGUNA
        */
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_peran')
                ->constrained('peran_pengguna')
                ->cascadeOnDelete();

            $table->foreignId('id_alamat')
                ->nullable()
                ->constrained('alamat')
                ->nullOnDelete();

            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');

            $table->enum('status', ['aktif', 'tidak_aktif'])->default('aktif');

            $table->string('foto')->nullable();
            $table->timestamps();
        });

        /*
        | KATEGORI PENERIMA
        */
        Schema::create('kategori_penerima', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        /*
        | PENERIMA
        */
        Schema::create('penerima', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_kategori_penerima')
                ->constrained('kategori_penerima')
                ->cascadeOnDelete();

            $table->foreignId('id_alamat')
                ->nullable()
                ->constrained('alamat')
                ->nullOnDelete();

            $table->string('nik')->nullable();
            $table->string('kk')->nullable();

            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');

            $table->string('telepon')->nullable();

            $table->enum('status_verifikasi', ['menunggu', 'diterima', 'ditolak'])->default('menunggu');
            $table->enum('status', ['aktif', 'tidak_aktif'])->default('aktif');

            $table->string('foto')->nullable();
            $table->timestamps();
        });

        /*
        | JABATAN
        */
        Schema::create('jabatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        /*
        | PEGAWAI
        */
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_jabatan')
                ->constrained('jabatan')
                ->cascadeOnDelete();

            $table->foreignId('id_alamat')
                ->nullable()
                ->constrained('alamat')
                ->nullOnDelete();

            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');

            $table->string('telepon')->nullable();

            $table->enum('status', ['aktif', 'tidak_aktif'])->default('aktif');

            $table->string('foto')->nullable();
            $table->timestamps();
        });

        /*
        | KEGIATAN
        */
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('detail')->nullable();

            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();

            $table->enum('status', ['dibuka', 'ditutup'])->default('dibuka');

            $table->timestamps();
        });

        /*
        | PROGRAM
        */
        Schema::create('program', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_kegiatan')
                ->constrained('kegiatan')
                ->cascadeOnDelete();

            $table->string('nama');
            $table->text('detail')->nullable();

            $table->integer('kuota')->default(0);

            $table->enum('status', ['dibuka', 'ditutup'])->default('dibuka');

            $table->timestamps();
        });

        /*
        | BANTUAN
        */
        Schema::create('bantuan', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_kegiatan')
                ->constrained('kegiatan')
                ->cascadeOnDelete();

            $table->foreignId('id_pengguna')
                ->constrained('pengguna')
                ->cascadeOnDelete();

            $table->string('kode_bantuan')->nullable();
            $table->string('nama_bantuan');

            $table->integer('total_kuota')->default(0);
            $table->integer('terdistribusi')->default(0);

            $table->enum('status', ['dibuka', 'ditutup'])->default('dibuka');

            $table->timestamps();
        });

        /*
        | DETAIL BANTUAN
        */
        Schema::create('detail_bantuan', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_bantuan')
                ->constrained('bantuan')
                ->cascadeOnDelete();

            $table->foreignId('id_penerima')
                ->constrained('penerima')
                ->cascadeOnDelete();

            $table->double('jumlah')->default(0);

            $table->enum('status', ['menunggu', 'disetujui', 'ditolak', 'selesai'])
                ->default('menunggu');

            $table->timestamps();
        });

        /*
        | PENGAJUAN
        */
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_penerima')
                ->constrained('penerima')
                ->cascadeOnDelete();

            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('file')->nullable();

            $table->enum('status', ['menunggu', 'disetujui', 'ditolak'])
                ->default('menunggu');

            $table->timestamps();
        });

        /*
        | DONASI
        */
        Schema::create('donasi', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_pengguna')
                ->constrained('pengguna')
                ->cascadeOnDelete();

            $table->foreignId('id_kegiatan')
                ->constrained('kegiatan')
                ->cascadeOnDelete();

            $table->string('nama_donasi');
            $table->double('total')->default(0);

            $table->enum('status', ['dibuka', 'ditutup'])->default('dibuka');

            $table->timestamps();
        });

        /*
        | DETAIL DONASI
        */
        Schema::create('detail_donasi', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_donasi')
                ->constrained('donasi')
                ->cascadeOnDelete();

            $table->string('nama_donatur');
            $table->double('jumlah')->default(0);

            $table->enum('status_pembayaran', ['lunas', 'menunggu'])
                ->default('menunggu');

            $table->timestamps();
        });

        /*
        | ARTIKEL
        */
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('konten')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });

        /*
        | KOMENTAR
        */
        Schema::create('komentar', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_artikel')
                ->constrained('artikel')
                ->cascadeOnDelete();

            $table->string('nama');
            $table->text('komentar');

            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('komentar');
        Schema::dropIfExists('artikel');
        Schema::dropIfExists('detail_donasi');
        Schema::dropIfExists('donasi');
        Schema::dropIfExists('pengajuan');
        Schema::dropIfExists('detail_bantuan');
        Schema::dropIfExists('bantuan');
        Schema::dropIfExists('program');
        Schema::dropIfExists('kegiatan');
        Schema::dropIfExists('pegawai');
        Schema::dropIfExists('jabatan');
        Schema::dropIfExists('penerima');
        Schema::dropIfExists('kategori_penerima');
        Schema::dropIfExists('pengguna');
        Schema::dropIfExists('alamat');
        Schema::dropIfExists('peran_pengguna');
    }
};