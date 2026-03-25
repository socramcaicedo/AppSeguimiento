<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    // Roles que puede asignar cada rol
    protected $rolesPermitidos = [
        'admin'      => ['admin', 'instructor', 'aprendiz', 'usuario'],
        'instructor' => ['aprendiz', 'usuario'],
        'aprendiz'   => [],
        'usuario'    => [],
    ];

    protected function credentials(Request $request)
    {
        return [
            'email'   => $request->email,
            'password' => $request->password,
            'estado'  => 1,
        ];
    }

    public function create()
    {
        // Verifica que tenga permiso de acceder al formulario
        if (!auth()->user()->hasAnyRole(['admin', 'instructor'])) {
            return redirect()->route('dashboard')
                ->with('error', 'No tienes permiso para crear usuarios.');
        }

        // Le pasa solo los roles que puede asignar
        $rolesDisponibles = $this->rolesPermitidos[auth()->user()->getRoleNames()->first()] ?? [];

        return view('users.createusuario', compact('rolesDisponibles'));
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        // Verifica rol general
        if (!$user->hasAnyRole(['admin', 'instructor'])) {
            return redirect()->route('dashboard')
                ->with('error', 'No tienes permiso para crear usuarios.');
        }

        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'rol'      => 'required|string',
        ]);

        // Verifica que no asigne un rol superior al suyo
        $rolSolicitado  = $request->rol;
        $rolActual      = $user->getRoleNames()->first();
        $rolesPermitidos = $this->rolesPermitidos[$rolActual] ?? [];

        if (!in_array($rolSolicitado, $rolesPermitidos)) {
            return redirect()->back()
                ->with('error', 'No puedes asignar el rol "' . $rolSolicitado . '".')
                ->withInput();
        }

        // Crea el usuario
        $nuevoUsuario = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'estado'   => $request->estado ?? 1,
        ]);

        // Asigna el rol con Spatie
        $nuevoUsuario->assignRole($rolSolicitado);

        return redirect()->back()->with('success', 'Usuario creado correctamente.');
    }
}
