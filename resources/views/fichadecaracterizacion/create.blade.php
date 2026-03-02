<!DOCTYPE html>
<html>
<head>
    <title>Crear Ficha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Crear Ficha</h2>

    <form action="{{ route('fichadecaracterizacion.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Código</label>
            <input type="text" name="codigo" class="form-control">
        </div>

        <div class="mb-3">
            <label>Denominación</label>
            <input type="text" name="Donominacion" class="form-control">
        </div>

        <div class="mb-3">
            <label>Cupo</label>
            <input type="number" name="cupo" class="form-control">
        </div>

        <div class="mb-3">
            <label>Fecha Inicio</label>
            <input type="date" name="FechaInicio" class="form-control">
        </div>

        <div class="mb-3">
            <label>Fecha Fin</label>
            <input type="date" name="FechaFin" class="form-control">
        </div>

        <div class="mb-3">
            <label>Observaciones</label>
            <textarea name="observaciones" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Centro</label>
            <input type="number" name="tbl_centrodeformacion_NIS" class="form-control">
        </div>

        <div class="mb-3">
            <label>Programa</label>
            <input type="number" name="tblprogramadeformacion_NIS" class="form-control">
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('fichadecaracterizacion.index') }}" class="btn btn-secondary">Volver</a>

    </form>
</div>

</body>
</html>
