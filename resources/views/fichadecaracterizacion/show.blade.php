<!DOCTYPE html>
<html>
<head>
    <title>Detalle Ficha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Detalle de la Ficha</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Código:</strong> {{ $fichas->codigo }}</p>
            <p><strong>Denominación:</strong> {{ $fichas->Donominacion }}</p>
            <p><strong>Cupo:</strong> {{ $fichas->cupo }}</p>
            <p><strong>Fecha Inicio:</strong> {{ $fichas->FechaInicio }}</p>
            <p><strong>Fecha Fin:</strong> {{ $fichas->FechaFin }}</p>
            <p><strong>Observaciones:</strong> {{ $fichas->observaciones }}</p>
        </div>
    </div>

    <a href="{{ route('fichadecaracterizacion.index') }}">volver </a>
</div>

</body>
</html>php
