<!DOCTYPE html>
<html>
<head>
    <title>Editar Ficha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Editar Ficha de Caracterización</h2>

    <form action="{{ route('fichadecaracterizacion.update', $fichas->NIS) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" id="codigo" value="{{ old('codigo', $fichas->codigo) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="Donominacion" class="form-label">Denominación</label>
            <input type="text" name="Donominacion" id="Donominacion" value="{{ old('Donominacion', $fichas->Donominacion) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="cupo" class="form-label">Cupo</label>
            <input type="number" name="cupo" id="cupo" value="{{ old('cupo', $fichas->cupo) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="FechaInicio" class="form-label">Fecha Inicio</label>
            <input type="date" name="FechaInicio" id="FechaInicio" value="{{ old('FechaInicio', $fichas->FechaInicio) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="FechaFin" class="form-label">Fecha Fin</label>
            <input type="date" name="FechaFin" id="FechaFin" value="{{ old('FechaFin', $fichas->FechaFin) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea name="observaciones" id="observaciones" class="form-control">{{ old('observaciones', $fichas->observaciones) }}</textarea>
        </div>

        <button class="btn btn-success">Actualizar</button>
        <a href="{{ route('fichadecaracterizacion.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>

</body>
</html>
