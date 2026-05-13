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
    | SHOW
    |--------------------------------------------------------------------------
    */

    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
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

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $data = [
            'name'  => $request->name,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {

            $data['password'] = Hash::make($request->password);

        }

        $user->update($data);

        return redirect()
            ->route('user.index')
            ->with('success', 'Data user berhasil diupdate.');
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