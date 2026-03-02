<h1>Detalle del Centro de Formación</h1>

<p><strong>NIS:</strong> {{ $centrodeformacion->NIS }}</p>
<p><strong>Código:</strong> {{ $centrodeformacion->Codigo }}</p>
<p><strong>Denominación:</strong> {{ $centrodeformacion->Denominacion }}</p>
<p><strong>Dirección:</strong> {{ $centrodeformacion->Direccion }}</p>
<p><strong>Observaciones:</strong> {{ $centrodeformacion->Observaciones }}</p>
<p><strong>Regional NIS:</strong> {{ $centrodeformacion->tblregionales_NIS }}</p>

<br>
<a href="{{ route('centrodeformacion.index') }}">Volver</a>
