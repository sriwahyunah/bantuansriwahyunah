<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class namaseederbantuanuna extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /*
        |--------------------------------------------------------------------------
        | PERAN ADMIN
        |--------------------------------------------------------------------------
        */

        DB::table('peran_admin')->insert([

            [
                'nama'       => 'Super Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama'       => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | ALAMAT
        |--------------------------------------------------------------------------
        */

        DB::table('alamat')->insert([

            [
                'jalan'      => 'Jl. Sudirman',
                'desa'       => 'Desa Damai',
                'kecamatan'  => 'Medan Kota',
                'kabupaten'  => 'Medan',
                'provinsi'   => 'Sumatera Utara',
                'kode_pos'   => '20111',
                'negara'     => 'Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | ADMIN
        |--------------------------------------------------------------------------
        */

        DB::table('admin')->insert([

            [
                'id_peran'   => 1,
                'id_alamat'  => 1,
                'nama'       => 'Administrator',
                'username'   => 'admin1',
                'password'   => Hash::make('123456'),
                'status'     => 'aktif',
                'foto'       => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | KATEGORI PENERIMA
        |--------------------------------------------------------------------------
        */

        DB::table('kategori_penerima')->insert([

            [
                'nama'       => 'Masyarakat Tidak Mampu',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama'       => 'Korban Bencana',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | PENERIMA
        |--------------------------------------------------------------------------
        */

        DB::table('penerima')->insert([

            [
                'id_kategori_penerima' => 1,
                'id_alamat'            => 1,
                'nik'                  => '1209123456789001',
                'kk'                   => '1209123456789002',
                'nama'                 => 'Budi Santoso',
                'username'             => 'budi',
                'password'             => Hash::make('123456'),
                'telepon'              => '081234567890',
                'status_verifikasi'    => 'diterima',
                'status'               => 'aktif',
                'foto'                 => null,
                'created_at'           => now(),
                'updated_at'           => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | JABATAN
        |--------------------------------------------------------------------------
        */

        DB::table('jabatan')->insert([

            [
                'nama'       => 'Petugas Lapangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama'       => 'Staff Administrasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | PEGAWAI
        |--------------------------------------------------------------------------
        */

        DB::table('pegawai')->insert([

            [
                'id_jabatan' => 1,
                'id_alamat'  => 1,
                'nama'       => 'Andi Saputra',
                'username'   => 'pegawai1',
                'password'   => Hash::make('123456'),
                'telepon'    => '081111111111',
                'status'     => 'aktif',
                'foto'       => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | KEGIATAN
        |--------------------------------------------------------------------------
        */

        DB::table('kegiatan')->insert([

            [
                'nama'             => 'Bantuan Sosial Ramadhan',
                'detail'           => 'Program bantuan untuk masyarakat',
                'tanggal_mulai'    => now(),
                'tanggal_selesai'  => now(),
                'status'           => 'dibuka',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | PROGRAM
        |--------------------------------------------------------------------------
        */

        DB::table('program')->insert([

            [
                'id_kegiatan' => 1,
                'nama'        => 'Program Sembako',
                'detail'      => 'Pembagian sembako gratis',
                'kuota'       => 100,
                'status'      => 'dibuka',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | BANTUAN
        |--------------------------------------------------------------------------
        */

        DB::table('bantuan')->insert([

            [
                'id_kegiatan'    => 1,
                'id_admin'       => 1,
                'kode_bantuan'   => 'BNT001',
                'nama_bantuan'   => 'Bantuan Tunai',
                'total_kuota'    => 100,
                'terdistribusi'  => 20,
                'status'         => 'dibuka',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | DETAIL BANTUAN
        |--------------------------------------------------------------------------
        */

        DB::table('detail_bantuan')->insert([

            [
                'id_bantuan'  => 1,
                'id_penerima' => 1,
                'jumlah'      => 500000,
                'status'      => 'disetujui',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | PENGAJUAN
        |--------------------------------------------------------------------------
        */

        DB::table('pengajuan')->insert([

            [
                'id_penerima' => 1,
                'judul'       => 'Pengajuan Bantuan Pendidikan',
                'deskripsi'   => 'Membutuhkan bantuan pendidikan',
                'file'        => null,
                'status'      => 'menunggu',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | DONASI
        |--------------------------------------------------------------------------
        */

        DB::table('donasi')->insert([

            [
                'id_admin'    => 1,
                'id_kegiatan' => 1,
                'nama_donasi' => 'Donasi Peduli Sesama',
                'total'       => 10000000,
                'status'      => 'dibuka',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | DETAIL DONASI
        |--------------------------------------------------------------------------
        */

        DB::table('detail_donasi')->insert([

            [
                'id_donasi'         => 1,
                'nama_donatur'      => 'Hamba Allah',
                'jumlah'            => 100000,
                'status_pembayaran' => 'lunas',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | ARTIKEL
        |--------------------------------------------------------------------------
        */

        DB::table('artikel')->insert([

            [
                'judul'      => 'Kegiatan Sosial 2026',
                'konten'     => 'Ini adalah artikel kegiatan sosial.',
                'foto'       => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | KOMENTAR
        |--------------------------------------------------------------------------
        */

        DB::table('komentar')->insert([

            [
                'id_artikel' => 1,
                'nama'       => 'Pengunjung',
                'komentar'   => 'Artikel sangat bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

    }
}