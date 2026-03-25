<!DOCTYPE html>
<html>
<head>
    <title>Crear Programa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Crear Programa</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('programa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Código</label>
            <input type="text" name="codigo" class="form-control" value="{{ old('codigo') }}">
        </div>

        <div class="mb-3">
            <label>Denominación</label>
            <input type="text" name="Denominacion" class="form-control" value="{{ old('Denominacion') }}">
        </div>

        <div class="mb-3">
            <label>Dirección</label>
            <input type="text" name="Direccion" class="form-control" value="{{ old('Direccion') }}">
        </div>

        <div class="mb-3">
            <label>Observaciones</label>
            <textarea name="observaciones" class="form-control">{{ old('observaciones') }}</textarea>
        </div>

        <div class="mb-3">
            <label>Centro de Formación</label>
            <select name="tbl_centrodeformacion_NIS1" class="form-control">
                <option value="">Seleccione un centro</option>
                @foreach($centros as $centro)
                    <option value="{{ $centro->NIS }}" {{ old('tbl_centrodeformacion_NIS1') == $centro->NIS ? 'selected' : '' }}>
                        {{ $centro->Denominacion }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('programa.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>

</body>
</html>
