<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function formLogin()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        $request->validate(User::$rules, User::$errorMessages);

        $credentials = $request->only(['email', 'password']);

        // Verificar el rol del usuario después de la autenticación
        // $user = Auth::user();

        if (Auth::attempt($credentials))
        {
            // El usuario está autenticado, ahora puedes acceder a sus propiedades
            $user = Auth::user();

            return redirect()->route('home')->with('status.message', 'Hi ' . '<b>' . $user->name . '</b>, session logged in successfully.');
        }

        if(!Auth::attempt($credentials))
        {
            return redirect()
            ->route('auth.login.form')
            ->with('danger.message', 'The data entered does not match our records.')
            ->withInput();
        };
    }

    public function processLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
        ->route('auth.login.form')
        ->with('status.message', 'La sesión se cerró con éxito.');
    }
}
