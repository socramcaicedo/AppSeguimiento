<!DOCTYPE html>
<html>
<head>
    <title>Crear EPS</title>
</head>
<body>

<h2>Registrar EPS</h2>

@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('eps.store') }}" method="POST">
    @csrf

    <label>Tipo Documento</label><br>
    <input type="number" name="Tdoc" required><br><br>

    <label>Denominación</label><br>
    <input type="text" name="Donominacion" required><br><br>

    <label>Observaciones</label><br>
    <input type="text" name="Observaciones"><br><br>

    <button type="submit">Guardar</button>
</form>

<br>
<a href="{{ route('eps.index') }}">Volver</a>

</body>
</html>
