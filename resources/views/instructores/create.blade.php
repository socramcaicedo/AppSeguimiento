<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Instructor</title>
</head>

<body>

<h2>Crear Instructor</h2>

<form action="{{ route('instructores.store') }}" method="POST">

    @csrf

    <label>Tipo Documento</label>
    <input type="text" name="Tdoc">

    <br><br>

    <label>Número Documento</label>
    <input type="text" name="Numdoc">

    <br><br>

    <label>Nombres</label>
    <input type="text" name="Nombres">

    <br><br>

    <label>Apellidos</label>
    <input type="text" name="Apellidos">

    <br><br>

    <label>Dirección</label>
    <input type="text" name="Direccion">

    <br><br>

    <label>Teléfono</label>
    <input type="text" name="Telefono">

    <br><br>

    <label>Correo Institucional</label>
    <input type="email" name="CorreoInstitucional">

    <br><br>

    <label>Correo Personal</label>
    <input type="email" name="CorreoPersonal">

    <br><br>

    <label>Sexo</label>
    <input type="text" name="Sexo">

    <br><br>

    <label>Fecha Nacimiento</label>
    <input type="date" name="FechaNacimiento">

    <br><br>

    <label>EPS</label>
    <input type="text" name="tbleps_NIS">

    <br><br>

    <label>Rol Administrativo</label>
    <input type="text" name="tblrolesadministrativos_NIS">

    <br><br>

    <button type="submit">Guardar</button>

</form>

<br>

<a href="{{ route('instructores.index') }}">Volver</a>

</body>
</html>
