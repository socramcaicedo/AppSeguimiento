<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Programa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Detalle del Programa</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>NIS:</strong> {{ $programa->NIS }}</p>
            <p><strong>Código:</strong> {{ $programa->codigo }}</p>
            <p><strong>Denominación:</strong> {{ $programa->Denominacion }}</p>
            <p><strong>Dirección:</strong> {{ $programa->Direccion }}</p>
            <p><strong>Observaciones:</strong> {{ $programa->observaciones }}</p>
            <p><strong>Centro:</strong> {{ $programa->centro ? $programa->centro->Denominacion : 'Sin asignar' }}</p>
        </div>
    </div>

    <br>
    <a href="{{ route('programa.index') }}" class="btn btn-secondary">Volver</a>
</div>

</body>
</html>
