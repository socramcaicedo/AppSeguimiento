<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instructores</title>
</head>
<body>

<h2>Lista de Instructores</h2>

{{-- Mensaje de éxito --}}
@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
    <tr>
        <th>Tipo Doc</th>
        <th>Número Doc</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo Institucional</th>
        <th>Correo Personal</th>
        <th>Sexo</th>
        <th>Fecha Nacimiento</th>
        <th>EPS</th>
        <th>Rol Administrativo</th>
    </tr>
    </thead>

    <tbody>
    @forelse($instructores as $instructor)
        <tr>
            <td>{{ $instructor->Tdoc }}</td>
            <td>{{ $instructor->Numdoc }}</td>
            <td>{{ $instructor->Nombres }}</td>
            <td>{{ $instructor->Apellidos }}</td>
            <td>{{ $instructor->Direccion }}</td>
            <td>{{ $instructor->Telefono }}</td>
            <td>{{ $instructor->CorreoInstitucional }}</td>
            <td>{{ $instructor->CorreoPersonal }}</td>
            <td>{{ $instructor->Sexo }}</td>
            <td>{{ $instructor->FechaNacimiento }}</td>
            <td>{{ $instructor->tbleps_NIS }}</td>
            <td>{{ $instructor->tblrolesadministrativos_NIS }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="12" align="center">
                No hay instructores registrados
            </td>
        </tr>
    @endforelse
    </tbody>
</table>

</body>
</html>
