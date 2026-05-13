<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('admin.user.index', compact('users'));
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('admin.user.create');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:3',
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);

        return redirect()
            ->route('user.index')
            ->with('success', 'Data user berhasil ditambahkan.');
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view(
            'admin.user.detail',
            compact('user')
        );
    }

  
    

    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $request->validate([

            'name'  => 'required',

            'email' => 'required|email',

        ]);

        $user = User::findOrFail($id);

        $user->update([

            'name'  => $request->name,

            'email' => $request->email,

        ]);

        return redirect()

            ->route('admin.user.index')

            ->with(
                'success',
                'Data berhasil diupdate'
            );
    }

    /*
    |--------------------------------------------------------------------------
    | DESTROY
    |--------------------------------------------------------------------------
    */

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('user.index')
            ->with('success', 'Data user berhasil dihapus.');
    }
}