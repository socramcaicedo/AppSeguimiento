<h2>Detalle del Aprendiz</h2>

<p><strong>NIS:</strong> {{ $aprendiz->NIS }}</p>
<p><strong>Documento:</strong> {{ $aprendiz->Numdoc }}</p>
<p><strong>Nombre:</strong> {{ $aprendiz->Nombres }} {{ $aprendiz->Apellidos }}</p>
<p><strong>Dirección:</strong> {{ $aprendiz->Direccion }}</p>
<p><strong>Teléfono:</strong> {{ $aprendiz->Telefono }}</p>
<p><strong>Correo institucional:</strong> {{ $aprendiz->CorreoInstitucional }}</p>
<p><strong>Correo personal:</strong> {{ $aprendiz->CorreoPersonal }}</p>
<p><strong>Sexo:</strong> {{ $aprendiz->Sexo }}</p>
<p><strong>Fecha nacimiento:</strong> {{ $aprendiz->FechaNacimiento }}</p>

<a href="{{ route('aprendices.index') }}">Volver</a>
