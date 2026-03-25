<!DOCTYPE html>
<html>
<head>
    <title>Editar Programa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Editar Programa</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('programa.update', $programa->NIS) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Código</label>
            <input type="text" name="codigo" value="{{ old('codigo', $programa->codigo) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Denominación</label>
            <input type="text" name="Denominacion" value="{{ old('Denominacion', $programa->Denominacion) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Dirección</label>
            <input type="text" name="Direccion" value="{{ old('Direccion', $programa->Direccion) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Observaciones</label>
            <textarea name="observaciones" class="form-control">{{ old('observaciones', $programa->observaciones) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Centro de Formación</label>
            <select name="tbl_centrodeformacion_NIS1" class="form-control">
                <option value="">Seleccione un centro</option>
                @foreach($centros as $centro)
                    <option value="{{ $centro->NIS }}"
                        {{ old('tbl_centrodeformacion_NIS1', $programa->tbl_centrodeformacion_NIS1) == $centro->NIS ? 'selected' : '' }}>
                        {{ $centro->Denominacion }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('programa.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>

</body>
</html>
