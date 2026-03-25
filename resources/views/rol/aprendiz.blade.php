@extends('layouts.dashboard')

@section('page-title', 'Panel Aprendiz')
@section('rol-label', '📚 Aprendiz')

@section('nav-items')
    <div class="nav-section-title">Mi espacio</div>
    <div class="nav-item"><a href="{{ route('fichadecaracterizacion.index') }}"><i class="bi bi-clipboard-data"></i> Mi Ficha</a></div>
    <div class="nav-item"><a href="{{ route('programa.index') }}"><i class="bi bi-book"></i> Mi Programa</a></div>
@endsection

@section('content')
    <div class="welcome-banner">
        <h2>¡Bienvenido, {{ auth()->user()->name }}! 📚</h2>
        <p>Consulta tu ficha de caracterización y el estado de tu contrato de aprendizaje.</p>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="card-stat">
                <div class="icon" style="background:#e8f5ee; color:#1a5c38"><i class="bi bi-clipboard-data-fill"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Estado de mi ficha</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-stat">
                <div class="icon" style="background:#e3f2fd; color:#1565c0"><i class="bi bi-book-fill"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Mi programa de formación</div>
            </div>
        </div>
    </div>
@endsection
