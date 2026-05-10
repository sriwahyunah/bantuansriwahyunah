<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerPenerima extends Controller
{

    /**
     * DISPLAY DATA
     */
    public function index()
    {

        return view('user.penerima.index');

    }


    /**
     * FORM CREATE
     */
    public function create()
    {

        return view('user.penerima.create');

    }


    /**
     * STORE DATA
     */
    public function store(Request $request)
    {

        //
    }


    /**
     * SHOW DETAIL
     */
    public function show(string $id)
    {

        return view('user.penerima.show');

    }


    /**
     * FORM EDIT
     */
    public function edit(string $id)
    {

        return view('user.penerima.edit');

    }


    /**
     * UPDATE DATA
     */
    public function update(Request $request, string $id)
    {

        //
    }


    /**
     * DELETE DATA
     */
    public function destroy(string $id)
    {

        //
    }

}