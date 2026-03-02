<h2>Editar Aprendiz</h2>

<form action="{{ route('aprendices.update', $aprendiz->NIS) }}" method="POST">
    @csrf
    @method('PUT')

    <label>NIS</label>
    <input type="number" name="NIS" value="{{ $aprendiz->NIS }}" readonly>
    <br><br>

    <label>Tipo documento</label>
    <select name="tbltiposdocumento_NIS">
        <option value="1" {{ $aprendiz->tbltiposdocumento_NIS == 1 ? 'selected' : '' }}>Cédula</option>
        <option value="2" {{ $aprendiz->tbltiposdocumento_NIS == 2 ? 'selected' : '' }}>Tarjeta identidad</option>
        <option value="3" {{ $aprendiz->tbltiposdocumento_NIS == 3 ? 'selected' : '' }}>Cédula extranjera</option>
    </select>
    <br><br>

    <label>Ficha caracterización</label>
    <input type="number" name="tblfichadecaraterizacion_NIS"
           value="{{ $aprendiz->tblfichadecaraterizacion_NIS }}">
    <br><br>

    <input type="number" name="Numdoc" value="{{ $aprendiz->Numdoc }}"><br>
    <input type="text" name="Nombres" value="{{ $aprendiz->Nombres }}"><br>
    <input type="text" name="Apellidos" value="{{ $aprendiz->Apellidos }}"><br>
    <input type="text" name="Direccion" value="{{ $aprendiz->Direccion }}"><br>
    <input type="text" name="Telefono" value="{{ $aprendiz->Telefono }}"><br>
    <input type="email" name="CorreoInstitucional" value="{{ $aprendiz->CorreoInstitucional }}"><br>
    <input type="email" name="CorreoPersonal" value="{{ $aprendiz->CorreoPersonal }}"><br>

    <label>Sexo</label>
    <select name="Sexo">
        <option value="1" {{ $aprendiz->Sexo == 1 ? 'selected' : '' }}>Masculino</option>
        <option value="2" {{ $aprendiz->Sexo == 2 ? 'selected' : '' }}>Femenino</option>
        <option value="3" {{ $aprendiz->Sexo == 3 ? 'selected' : '' }}>Otro</option>
    </select>
    <br>

    <input type="date" name="FechaNacimiento" value="{{ $aprendiz->FechaNacimiento }}">
    <br><br>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('aprendices.index') }}">Volver</a>
