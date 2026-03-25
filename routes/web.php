<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProgramadeformacionController;
use App\Http\Controllers\AprendicesController;
use App\Http\Controllers\CentroDeFormacionController;
use App\Http\Controllers\TiposdocumentoController;
use App\Http\Controllers\FichaDeCaracterizacionController;
use App\Http\Controllers\EntecomformadoresController;
use App\Http\Controllers\RolesadministrativosController;
use App\Http\Controllers\IntructoresController;
use App\Http\Controllers\RegionalesController;
use App\Http\Controllers\EpsController;
use App\Http\Controllers\UsersController; // 👈 faltaba este

// ── Raíz ────────────────────────────────────────────────────────────────────
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('welcome');
    }
    return redirect()->route('login');
});

// ── Rutas autenticadas ───────────────────────────────────────────────────────
Route::middleware(['auth'])->group(function () {

    Route::get('view/welcome', function () {
        return view('welcome');
    })->name('welcome');

    // ── Dashboards por rol ───────────────────────────────────────────────────
    Route::middleware(['auth'])->group(function () {

        Route::get('/admin/dashboard', function () {
            return view('rol.admin');
        })->name('admin.dashboard');

        Route::get('/instructor/dashboard', function () {
            return view('rol.instructor');
        })->name('instructor.dashboard');

        Route::get('/aprendiz/dashboard', function () {
            return view('rol.aprendiz');
        })->name('aprendiz.dashboard');

        Route::get('/usuario/dashboard', function () {
            return view('rol.usuario');
        })->name('usuario.dashboard');

    });

// Esta va fuera del middleware porque debe ser accesible siempre
    Route::get('/rol/error', function () {
        return view('rol.error');
    })->name('rol.error');

    // ── Usuarios ─────────────────────────────────────────────────────────────
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');

    // ── Aprendices ───────────────────────────────────────────────────────────
    Route::resource('aprendices', AprendicesController::class);
    Route::get('/aprendices/{NIS}/pdf', [AprendicesController::class, 'pdf'])->name('aprendices.pdf');
    Route::get('/aprendices/enviarpdf', function () {
        return view('aprendices.enviarpdf');
    })->name('aprendices.enviarpdf');
    Route::post('/aprendices/enviar', [AprendicesController::class, 'enviar'])->name('aprendices.enviar');

    // ── Programa de formación ────────────────────────────────────────────────
    Route::resource('programa', ProgramadeformacionController::class);

    // ── Centro de formación ──────────────────────────────────────────────────
    Route::resource('centrodeformacion', CentroDeFormacionController::class);

    // ── Tipo documento ───────────────────────────────────────────────────────
    Route::get('/tipodocumento', [TiposdocumentoController::class, 'index']);

    // ── Ficha de caracterización ─────────────────────────────────────────────
    Route::resource('fichadecaracterizacion', FichaDeCaracterizacionController::class);

    // ── Ente conformador ─────────────────────────────────────────────────────
    Route::get('/enteconformador', [EntecomformadoresController::class, 'index']);

    // ── Roles administrativos ────────────────────────────────────────────────
    Route::get('/rolesadmin', [RolesadministrativosController::class, 'index']);

    // ── Instructores ─────────────────────────────────────────────────────────
    Route::resource('instructores', IntructoresController::class);

    // ── Regionales ───────────────────────────────────────────────────────────
    Route::get('/regionales', [RegionalesController::class, 'index']);

    // ── EPS ──────────────────────────────────────────────────────────────────
    Route::resource('eps', EpsController::class);
});

// ── Error de rol ─────────────────────────────────────────────────────────────
Route::get('/rol/error', function () {
    return view('rol.error');
})->name('rol.error');

// ── Auth (login, logout, registro) ───────────────────────────────────────────
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
