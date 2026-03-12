<h1>Tipos de Documento</h1>

<table border="1">
    <thead>
    <tr>
        <th>NIS</th>
        <th>Tdoc</th>
        <th>Donominacion</th>
        <th>Observaciones</th>
    </tr>
    </thead>

    <tbody>
    @forelse($tipos as $tipo)
        <tr>
            <td>{{ $tipo->NIS }}</td>
            <td>{{ $tipo->Tdoc }}</td>
            <td>{{ $tipo->Donominacion }}</td>
            <td>{{ $tipo->Observaciones }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4">No hay registros</td>
        </tr>
    @endforelse
    </tbody>
</table>
<a href="/" class="btn btn-secondary">Volver</a>
