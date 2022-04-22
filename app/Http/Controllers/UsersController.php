<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Descripción: Se encargara de traer todos los usuarios disponibles en la base de datos
     * hacia una vista.
     */
    public function index() {
        $usuarios = User::all();
        return view('usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Descripción: Esta función se encargara de guardar un usuario en la base de datos.
     */
    public function store(Request $request ) {
        $request->validate([
            'name'  => ['required', 'unique:users'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Session::flash('success', 'Usuario registrado con éxito!');
        return redirect('/');
    }

    /**
     * Descripción: Acción que se encargara de eliminar un usuario de la base de datos.
     */
    public function destroy(User $user) {
        $user->delete();
        return back();
    }
}
