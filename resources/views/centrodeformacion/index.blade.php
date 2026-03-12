<h1>Lista de Centros de Formación</h1>

<a href="{{ route('centrodeformacion.create') }}">Crear nuevo centro</a>

<table border="1" cellpadding="8">
    <thead>
    <tr>
        <th>NIS</th>
        <th>Codigo</th>
        <th>Denominacion</th>
        <th>Direccion</th>
        <th>Observaciones</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @forelse($centros as $centro)
        <tr>
            <td>{{ $centro->NIS }}</td>
            <td>{{ $centro->Codigo }}</td>
            <td>{{ $centro->Denominacion }}</td>
            <td>{{ $centro->Direccion }}</td>
            <td>{{ $centro->Observaciones }}</td>

            <td>
                <a href="{{ route('centrodeformacion.show', $centro->NIS) }}">Ver</a>
                <a href="{{ route('centrodeformacion.edit', $centro->NIS) }}">Editar</a>

                <form action="{{ route('centrodeformacion.destroy', $centro->NIS) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No hay registros</td>
        </tr>
    @endforelse
    </tbody>
</table>
<a href="/" class="btn btn-secondary">Volver</a>
