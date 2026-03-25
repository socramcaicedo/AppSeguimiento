<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // 👈 agregar

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home'; // fallback por si falla todo

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Redirige según el rol después de login exitoso
     */
    protected function authenticated(Request $request, $user)
    {
        return match((int) $user->rol) {
            5 => redirect()->route('admin.dashboard'),
            6 => redirect()->route('instructor.dashboard'),
            7 => redirect()->route('aprendiz.dashboard'),
            8 => redirect()->route('usuario.dashboard'),
            default => redirect()->route('rol.error')
        };
    }
}
