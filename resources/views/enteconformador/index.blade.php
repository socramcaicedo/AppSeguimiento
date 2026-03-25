<!DOCTYPE html>
<html>
<head>
    <title>Lista de Entes Conformadores</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Lista de Entes Conformadores</h2>

@if($ente->isEmpty())
    <p>No hay registros.</p>
@else
    <table>
        <thead>
        <tr>
            <th>NIS</th>
            <th>Numdoc</th>
            <th>Razón Social</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo Personal</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ente as $item)
            <tr>
                <td>{{ $item->NIS }}</td>
                <td>{{ $item->Numdoc }}</td>
                <td>{{ $item->RazonSocial }}</td>
                <td>{{ $item->Direccion }}</td>
                <td>{{ $item->Telefono }}</td>
                <td>{{ $item->CorreoPersonal }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="@dashboardRoute" class="btn btn-outline-success">
        <i class="bi bi-arrow-left"></i> Volver
    </a>
@endif

</body>
</html>
