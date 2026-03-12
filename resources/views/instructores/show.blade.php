<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalle Instructor</title>
</head>

<body>

<h2>Detalle del Instructor</h2>

<p><strong>NIS:</strong> {{ $instructor->NIS }}</p>

<p><strong>Tipo Documento:</strong> {{ $instructor->Tdoc }}</p>

<p><strong>Número Documento:</strong> {{ $instructor->Numdoc }}</p>

<p><strong>Nombres:</strong> {{ $instructor->Nombres }}</p>

<p><strong>Apellidos:</strong> {{ $instructor->Apellidos }}</p>

<p><strong>Dirección:</strong> {{ $instructor->Direccion }}</p>

<p><strong>Teléfono:</strong> {{ $instructor->Telefono }}</p>

<p><strong>Correo Institucional:</strong> {{ $instructor->CorreoInstitucional }}</p>

<p><strong>Correo Personal:</strong> {{ $instructor->CorreoPersonal }}</p>
<p><strong>Sexo:</strong>
    {{ $instructor->Sexo == 1 ? 'Masculino' : 'Femenino' }}
</p>

<p><strong>Fecha de Nacimiento:</strong> {{ $instructor->FechaNacimiento }}</p>

<br><br>

<a href="{{ route('instructores.index') }}">Volver a la lista</a>

</body>
</html>
