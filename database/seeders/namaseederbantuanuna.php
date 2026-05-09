<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class namaseederbantuanuna extends Seeder
{
    /**
     * RUN DATABASE SEEDER
     */
    public function run(): void
    {

        /*
        |--------------------------------------------------------------------------
        | ROLE USER
        |--------------------------------------------------------------------------
        */

        DB::table('roleuser')->insert([

            [
                'name'       => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'operator',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'bendahara',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | ADDRESS
        |--------------------------------------------------------------------------
        */

        DB::table('address')->insert([

            [
                'street'     => 'Jl. Banda Aceh - Medan',
                'village'    => 'Kota Bakti',
                'district'   => 'Sakti',
                'regency'    => 'Pidie',
                'province'   => 'Aceh',
                'postalcode' => '24111',
                'country'    => 'Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | USER
        |--------------------------------------------------------------------------
        */

        DB::table('user')->insert([

            [
                'idrole'     => 1,
                'idaddress'  => 1,
                'name'       => 'Administrator',
                'username'   => 'admin',
                'password'   => Hash::make('admin123'),
                'status'     => 'active',
                'photo'      => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'idrole'     => 2,
                'idaddress'  => 1,
                'name'       => 'Operator',
                'username'   => 'operator',
                'password'   => Hash::make('operator123'),
                'status'     => 'active',
                'photo'      => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | CATEGORY BENEFICIARY
        |--------------------------------------------------------------------------
        */

        DB::table('categorybeneficiary')->insert([

            [
                'name'       => 'fakir',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'miskin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'rentan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'menengah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | BENEFICIARY
        |--------------------------------------------------------------------------
        */

        DB::table('beneficiary')->insert([

            [
                'idcategorybeneficiary' => 1,
                'idaddress'             => 1,
                'nik'                   => '1101010101010001',
                'kk'                    => '1101010101010001',
                'name'                  => 'Sri Wahyunah',
                'username'              => 'sriwahyunah',
                'password'              => Hash::make('123456'),
                'phone'                 => '082111111111',
                'statusacceptance'      => 'accepted',
                'status'                => 'active',
                'photo'                 => null,
                'created_at'            => now(),
                'updated_at'            => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | POSITION
        |--------------------------------------------------------------------------
        */

        DB::table('position')->insert([

            [
                'name'       => 'ketua',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'sekretaris',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'bendahara',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'relawan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | EMPLOYEE
        |--------------------------------------------------------------------------
        */

        DB::table('employee')->insert([

            [
                'idposition' => 1,
                'idaddress'  => 1,
                'name'       => 'Ketua Bantuan',
                'username'   => 'ketua',
                'password'   => Hash::make('123456'),
                'phone'      => '081234567890',
                'status'     => 'active',
                'photo'      => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | EVENT
        |--------------------------------------------------------------------------
        */

        DB::table('event')->insert([

            [
                'name'       => 'Ramadhan Berbagi',
                'detail'     => 'Program bantuan bulan Ramadhan',
                'startdate'  => now(),
                'enddate'    => now(),
                'status'     => 'open',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | PROGRAM
        |--------------------------------------------------------------------------
        */

        DB::table('program')->insert([

            [
                'idevent'    => 1,
                'name'       => 'Bantuan Sembako',
                'detail'     => 'Pembagian sembako masyarakat',
                'quota'      => 100,
                'status'     => 'open',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | ASSISTANCE TYPE
        |--------------------------------------------------------------------------
        */

        DB::table('assistancetype')->insert([

            [
                'name'       => 'Sembako',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'Pendidikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | ASSISTANCE
        |--------------------------------------------------------------------------
        */

        DB::table('assistance')->insert([

            [
                'idevent'          => 1,
                'iduser'           => 1,
                'assistancecode'   => 'BST001',
                'assistancename'   => 'Bantuan Tunai',
                'totalquota'       => 100,
                'totaldistributed' => 10,
                'status'           => 'open',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | ASSISTANCE DETAIL
        |--------------------------------------------------------------------------
        */

        DB::table('assistancedetail')->insert([

            [
                'idassistance' => 1,
                'idbeneficiary'=> 1,
                'amount'       => 500000,
                'status'       => 'approved',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | SUBMISSION
        |--------------------------------------------------------------------------
        */

        DB::table('submission')->insert([

            [
                'idbeneficiary'   => 1,
                'idassistancetype'=> 1,
                'title'           => 'Pengajuan Bantuan',
                'description'     => 'Pengajuan bantuan sembako',
                'file'            => null,
                'status'          => 'approved',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | DONATION CATEGORY
        |--------------------------------------------------------------------------
        */

        DB::table('donationcategory')->insert([

            [
                'name'       => 'uang',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name'       => 'barang',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | DONATION
        |--------------------------------------------------------------------------
        */

        DB::table('donation')->insert([

            [
                'iduser'      => 1,
                'idevent'     => 1,
                'donationname'=> 'Donasi Ramadhan',
                'total'       => 10000000,
                'status'      => 'open',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | DONATION DETAIL
        |--------------------------------------------------------------------------
        */

        DB::table('donationdetail')->insert([

            [
                'iddonation'   => 1,
                'donorname'    => 'Hamba Allah',
                'amount'       => 500000,
                'paymentstatus'=> 'paid',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | ARTICLE
        |--------------------------------------------------------------------------
        */

        DB::table('article')->insert([

            [
                'title'      => 'Kegiatan Bantuan Sosial',
                'content'    => 'Kegiatan bantuan sosial berjalan lancar.',
                'photo'      => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | COMMENT
        |--------------------------------------------------------------------------
        */

        DB::table('comment')->insert([

            [
                'idarticle'  => 1,
                'name'       => 'Pengunjung',
                'comment'    => 'Semoga program terus berjalan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

    }
}