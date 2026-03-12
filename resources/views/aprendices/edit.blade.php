<h2>Editar Aprendiz</h2>

<form action="{{ route('aprendices.update', $aprendiz->NIS) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="hidden" name="NIS" value="{{ $aprendiz->NIS }}">

    <label>Tipo documento</label>
    <select name="tbltiposdocumento_NIS">
        @foreach($tipos as $tipo)
            <option value="{{ $tipo->NIS }}"
                {{ $aprendiz->tbltiposdocumento_NIS == $tipo->NIS ? 'selected' : '' }}>
                {{ $tipo->Nombre }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Ficha caracterización</label>
    <select name="tblfichadecaraterizacion_NIS">
        @foreach($fichas as $ficha)
            <option value="{{ $ficha->NIS }}"
                {{ $aprendiz->tblfichadecaraterizacion_NIS == $ficha->NIS ? 'selected' : '' }}>
                {{ $ficha->NIS }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Número documento</label>
    <input type="number" name="Numdoc" value="{{ $aprendiz->Numdoc }}">
    <br><br>

    <label>Nombres</label>
    <input type="text" name="Nombres" value="{{ $aprendiz->Nombres }}">
    <br><br>

    <label>Apellidos</label>
    <input type="text" name="Apellidos" value="{{ $aprendiz->Apellidos }}">
    <br><br>

    <label>Dirección</label>
    <input type="text" name="Direccion" value="{{ $aprendiz->Direccion }}">
    <br><br>

    <label>Teléfono</label>
    <input type="text" name="Telefono" value="{{ $aprendiz->Telefono }}">
    <br><br>

    <label>Correo institucional</label>
    <input type="email" name="CorreoInstitucional" value="{{ $aprendiz->CorreoInstitucional }}">
    <br><br>

    <label>Correo personal</label>
    <input type="email" name="CorreoPersonal" value="{{ $aprendiz->CorreoPersonal }}">
    <br><br>

    <label>Sexo</label>
    <select name="Sexo">
        <option value="1" {{ $aprendiz->Sexo == 1 ? 'selected' : '' }}>Masculino</option>
        <option value="2" {{ $aprendiz->Sexo == 2 ? 'selected' : '' }}>Femenino</option>
        <option value="3" {{ $aprendiz->Sexo == 3 ? 'selected' : '' }}>Otro</option>
    </select>
    <br><br>

    <label>Fecha nacimiento</label>
    <input type="date" name="FechaNacimiento" value="{{ $aprendiz->FechaNacimiento }}">
    <br><br>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="{{ route('aprendices.index') }}">Volver</a>
