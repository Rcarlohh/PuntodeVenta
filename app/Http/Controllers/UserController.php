<?php

namespace App\Http\Controllers;

use App\Models\GridUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = GridUser::all();
        return view('users.index', compact('users'));
    }

    public function edit(GridUser $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, GridUser $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update($request->only(['name', 'email']));

        return redirect()->route('users.index')->with('success', 'Usuario Actualizado Exitosamente');
    }

    public function destroy(GridUser $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario Eliminado');
    }
}