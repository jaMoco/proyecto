<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class MyController extends Controller
{
    public function showRegistrationForm()
    {
        return view('index');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required|string|max:15',
            'cedula' => 'required|string|max:15|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
                'confirmed',
            ],
        ]);

        User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'cedula' => $request->cedula,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login.show')->with('success', 'Registro exitoso. Por favor, inicia sesión.');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Inicio de sesión exitoso.');
        } else {
            return redirect()->back()->withErrors(['email' => 'Las credenciales no coinciden con nuestros registros.']);
        }
    }

        public function logout(Request $request)
        {
            Auth::logout();
            return redirect()->route('logout')->with('success', 'Sesión cerrada correctamente.');
    }
}