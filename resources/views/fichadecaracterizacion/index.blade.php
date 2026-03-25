<!DOCTYPE html>
<html>
<head>
    <title>Lista de Fichas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Lista de Fichas</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('fichadecaracterizacion.create') }}" class="btn btn-primary mb-3">
        Nueva Ficha
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>NIS</th>
            <th>Código</th>
            <th>Denominacion</th>
            <th>Cupo</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($fichas as $ficha)
            <tr>
                <td>{{ $ficha->NIS }}</td>
                <td>{{ $ficha->codigo }}</td>
                <td>{{ $ficha->Donominacion }}</td>
                <td>{{ $ficha->cupo }}</td>
                <td>{{ $ficha->FechaInicio }}</td>
                <td>{{ $ficha->FechaFin }}</td>
                <td>
                    <a href="{{ route('fichadecaracterizacion.show',$fichas) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('fichadecaracterizacion.edit',$fichas) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('fichadecaracterizacion.destroy',$fichas) }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


</div>
<a href="@dashboardRoute" class="btn btn-outline-success">
    <i class="bi bi-arrow-left"></i> Volver
</a>

</body>
</html>
