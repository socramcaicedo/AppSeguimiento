<!DOCTYPE html>
<html>
<head>
    <title>Lista de Regionales</title>
</head>
<body>

<h2>Lista de Regionales</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
    <tr>
        <th>NIS</th>
        <th>Código</th>
        <th>Denominación</th>
        <th>Dirección</th>
        <th>Observaciones</th>
    </tr>
    </thead>

    <tbody>
    @forelse($regionales as $regional)
        <tr>
            <td>{{ $regional->NIS }}</td>
            <td>{{ $regional->codigo }}</td>
            <td>{{ $regional->Donominacion }}</td>
            <td>{{ $regional->Direcion }}</td>
            <td>{{ $regional->observaciones }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="5" align="center">No hay registros</td>
        </tr>
    @endforelse
    </tbody>
</table>

</body>
</html>
