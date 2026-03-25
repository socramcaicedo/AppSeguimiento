@extends('layouts.dashboard')

@section('page-title', 'Panel Instructor')
@section('rol-label', '🎓 Instructor')

@section('nav-items')
    <div class="nav-section-title">Mi gestión</div>
    <div class="nav-item"><a href="{{ route('aprendices.index') }}"><i class="bi bi-people"></i> Aprendices</a></div>
    <div class="nav-item"><a href="{{ route('programa.index') }}"><i class="bi bi-book"></i> Programas</a></div>
    <div class="nav-item"><a href="{{ route('fichadecaracterizacion.index') }}"><i class="bi bi-clipboard-data"></i> Fichas</a></div>
@endsection

@section('content')
    <div class="welcome-banner">
        <h2>¡Hola, {{ auth()->user()->name }}! 🎓</h2>
        <p>Gestiona tus aprendices y realiza seguimiento a los contratos de aprendizaje.</p>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card-stat">
                <div class="icon" style="background:#e8f5ee; color:#1a5c38"><i class="bi bi-people-fill"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Mis aprendices</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-stat">
                <div class="icon" style="background:#e3f2fd; color:#1565c0"><i class="bi bi-book-fill"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Programas asignados</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-stat">
                <div class="icon" style="background:#fce4ec; color:#880e4f"><i class="bi bi-clipboard-check-fill"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Fichas pendientes</div>
            </div>
        </div>
    </div>
@endsection
