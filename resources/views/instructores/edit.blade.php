<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Instructor</title>
</head>

<body>

<h2>Editar Instructor</h2>

<form action="{{ route('instructores.update',$instructor->NIS) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Tipo Documento</label>
    <input type="text" name="Tdoc" value="{{ $instructor->Tdoc }}">

    <br><br>

    <label>Número Documento</label>
    <input type="text" name="Numdoc" value="{{ $instructor->Numdoc }}">

    <br><br>

    <label>Nombres</label>
    <input type="text" name="Nombres" value="{{ $instructor->Nombres }}">

    <br><br>

    <label>Apellidos</label>
    <input type="text" name="Apellidos" value="{{ $instructor->Apellidos }}">

    <br><br>

    <label>Dirección</label>
    <input type="text" name="Direccion" value="{{ $instructor->Direccion }}">

    <br><br>

    <label>Teléfono</label>
    <input type="text" name="Telefono" value="{{ $instructor->Telefono }}">

    <br><br>

    <label>Correo Institucional</label>
    <input type="email" name="CorreoInstitucional" value="{{ $instructor->CorreoInstitucional }}">

    <br><br>

    <label>Correo Personal</label>
    <input type="email" name="CorreoPersonal" value="{{ $instructor->CorreoPersonal }}">

    <br><br>

    <label>Sexo</label>
    <input type="text" name="Sexo" value="{{ $instructor->Sexo }}">

    <br><br>

    <label>Fecha Nacimiento</label>
    <input type="date" name="FechaNacimiento" value="{{ $instructor->FechaNacimiento }}">

    <br><br>

    <label>EPS</label>
    <input type="text" name="tbleps_NIS" value="{{ $instructor->tbleps_NIS }}">

    <br><br>

    <label>Rol Administrativo</label>
    <input type="text" name="tblrolesadministrativos_NIS" value="{{ $instructor->tblrolesadministrativos_NIS }}">

    <br><br>

    <button type="submit">Actualizar</button>

</form>

<br>

<a href="{{ route('instructores.index') }}">Volver</a>

</body>
</html>
