<h1>Editar Centro de Formación</h1>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('centrodeformacion.update', $centrodeformacion->NIS) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Código:</label><br>
    <input type="text" name="Codigo" value="{{ old('Codigo', $centrodeformacion->Codigo) }}"><br><br>

    <label>Denominación:</label><br>
    <input type="text" name="Denominacion" value="{{ old('Denominacion', $centrodeformacion->Denominacion) }}"><br><br>

    <label>Dirección:</label><br>
    <input type="text" name="Direccion" value="{{ old('Direccion', $centrodeformacion->Direccion) }}"><br><br>

    <label>Observaciones:</label><br>
    <input type="text" name="Observaciones" value="{{ old('Observaciones', $centrodeformacion->Observaciones) }}"><br><br>

    <label>Regional NIS:</label><br>
    <input type="number" name="tblregionales_NIS" value="{{ old('tblregionales_NIS', $centrodeformacion->tblregionales_NIS) }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="{{ route('centrodeformacion.index') }}">Volver</a>
