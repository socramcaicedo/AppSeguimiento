<h2>Registrar Aprendiz</h2>

<form action="{{ route('aprendices.store') }}" method="POST">
    @csrf

    <label>NIS (ID del aprendiz)</label>
    <input type="number" name="NIS" required>
    <br><br>

    <label>Tipo de documento</label>
    <select name="tbltiposdocumento_NIS" required>
        <option value="">Seleccione...</option>
        <option value="1">Cédula</option>
        <option value="2">Tarjeta de identidad</option>
        <option value="3">Cédula extranjera</option>
    </select>
    <br><br>

    <label>Ficha caracterización (ID)</label>
    <input type="number" name="tblfichadecaraterizacion_NIS" required>
    <br><br>

    <label>Documento</label>
    <input type="number" name="Numdoc" required>
    <br><br>

    <label>Nombres</label>
    <input type="text" name="Nombres" required>
    <br><br>

    <label>Apellidos</label>
    <input type="text" name="Apellidos" required>
    <br><br>

    <label>Dirección</label>
    <input type="text" name="Direccion">
    <br><br>

    <label>Teléfono</label>
    <input type="text" name="Telefono">
    <br><br>

    <label>Correo institucional</label>
    <input type="email" name="CorreoInstitucional">
    <br><br>

    <label>Correo personal</label>
    <input type="email" name="CorreoPersonal">
    <br><br>

    <label>Sexo</label>
    <select name="Sexo">
        <option value="">Seleccione...</option>
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
        <option value="3">Otro</option>
    </select>
    <br><br>

    <label>Fecha nacimiento</label>
    <input type="date" name="FechaNacimiento">
    <br><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('aprendices.index') }}">Volver</a>
