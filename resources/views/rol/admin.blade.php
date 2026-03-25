@extends('layouts.dashboard')

@section('page-title', 'Panel Administrador')
@section('rol-label', '👑 Administrador')

@section('nav-items')
    <div class="nav-section-title">Gestión</div>
    <div class="nav-item"><a href="{{ route('aprendices.index') }}"><i class="bi bi-people"></i> Aprendices</a></div>
    <div class="nav-item"><a href="{{ route('instructores.index') }}"><i class="bi bi-person-video3"></i> Instructores</a></div>
    <div class="nav-item"><a href="{{ route('programa.index') }}"><i class="bi bi-book"></i> Programas</a></div>
    <div class="nav-item"><a href="{{ route('centrodeformacion.index') }}"><i class="bi bi-building"></i> Centros</a></div>
    <div class="nav-section-title">Configuración</div>
    <div class="nav-item"><a href="{{ route('eps.index') }}"><i class="bi bi-hospital"></i> EPS</a></div>
    <div class="nav-item"><a href="/tipodocumento"><i class="bi bi-card-text"></i> Tipos Documento</a></div>
    <div class="nav-item"><a href="/regionales"><i class="bi bi-geo-alt"></i> Regionales</a></div>
    <div class="nav-item"><a href="/rolesadmin"><i class="bi bi-person-badge"></i> Roles Admin</a></div>
    <div class="nav-item"><a href="/enteconformador"><i class="bi bi-diagram-3"></i> Ente Conformador</a></div>
    <div class="nav-section-title">Usuarios</div>
    <div class="nav-item"><a href="{{ route('users.create') }}"><i class="bi bi-person-plus"></i> Crear Usuario</a></div>
@endsection

@section('content')
    <div class="welcome-banner">
        <h2>¡Bienvenido, {{ auth()->user()->name }}! 👋</h2>
        <p>Tienes acceso completo al sistema de seguimiento de contratos de aprendizaje.</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card-stat">
                <div class="icon" style="background:#e8f5ee; color:#1a5c38"><i class="bi bi-people-fill"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Aprendices registrados</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-stat">
                <div class="icon" style="background:#fff3e0; color:#e65100"><i class="bi bi-person-video3"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Instructores activos</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-stat">
                <div class="icon" style="background:#e3f2fd; color:#1565c0"><i class="bi bi-book-fill"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Programas de formación</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-stat">
                <div class="icon" style="background:#fce4ec; color:#880e4f"><i class="bi bi-clipboard-data-fill"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Fichas activas</div>
            </div>
        </div>
    </div>
@endsection
