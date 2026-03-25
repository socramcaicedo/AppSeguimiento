@extends('layouts.dashboard')

@section('page-title', 'Panel Usuario')
@section('rol-label', '👤 Usuario')

@section('nav-items')
    <div class="nav-section-title">Consultas</div>
    <div class="nav-item"><a href="{{ route('fichadecaracterizacion.index') }}"><i class="bi bi-clipboard-data"></i> Ficha Caracterización</a></div>
@endsection

@section('content')
    <div class="welcome-banner">
        <h2>¡Hola, {{ auth()->user()->name }}! 👤</h2>
        <p>Consulta la información disponible de tu contrato de aprendizaje.</p>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="card-stat">
                <div class="icon" style="background:#e8f5ee; color:#1a5c38"><i class="bi bi-file-earmark-text-fill"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Documentos disponibles</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-stat">
                <div class="icon" style="background:#fff3e0; color:#e65100"><i class="bi bi-info-circle-fill"></i></div>
                <div class="stat-value">—</div>
                <div class="stat-label">Consultas realizadas</div>
            </div>
        </div>
    </div>
@endsection
