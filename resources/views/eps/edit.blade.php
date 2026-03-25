<!DOCTYPE html>
<html>
<head>
    <title>Editar EPS</title>
</head>
<body>

<h2>Editar EPS</h2>

<form action="{{ route('eps.update', $eps->NIS) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Tipo Documento</label><br>
    <input type="number" name="Tdoc" value="{{ $eps->Tdoc }}" required>
    <br><br>

    <label>Denominación</label><br>
    <input type="text" name="Donominacion" value="{{ $eps->Donominacion }}" required>
    <br><br>

    <label>Observaciones</label><br>
    <input type="text" name="Observaciones" value="{{ $eps->Observaciones }}">
    <br><br>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="{{ route('eps.index') }}">Volver</a>

</body>
</html>
