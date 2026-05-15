<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BantuanController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $bantuan = DB::table('bantuan')
            ->orderBy('created_at', 'desc')
            ->get();

        return view(
            'admin.bantuan.index',
            compact('bantuan')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $bantuan = DB::table('bantuan')
            ->where('id', $id)
            ->first();

        if (!$bantuan) {

            abort(404);

        }

        return view(
            'admin.bantuan.detail',
            compact('bantuan')
        );
    }
}