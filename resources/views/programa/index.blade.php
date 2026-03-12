<!DOCTYPE html>
<html>
<head>
    <title>Lista de Programas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Lista de Programas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <a href="{{ route('programa.create') }}" class="btn btn-primary mb-3">Nuevo Programa</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>NIS</th>
            <th>Código</th>
            <th>Denominación</th>
            <th>Dirección</th>
            <th>Centro</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($programas as $programa)
            <tr>
                <td>{{ $programa->NIS }}</td>
                <td>{{ $programa->codigo }}</td>
                <td>{{ $programa->Denominacion }}</td>
                <td>{{ $programa->Direccion }}</td>
                <td>{{ $programa->centro ? $programa->centro->Denominacion : 'Sin asignar' }}</td>
                <td>
                    <a href="{{ route('programa.show', $programa->NIS) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('programa.edit', $programa->NIS) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('programa.destroy', $programa->NIS) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<a href="/" class="btn btn-secondary">Volver</a>

</body>
</html>
