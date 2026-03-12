<h2>Lista de Roles Administrativos</h2>

{{-- Mensaje de éxito --}}
@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
    <tr>
        <th>NIS</th>
        <th>Descripcion</th>

    </tr>
    </thead>

    <tbody>
    @forelse($roles as $rol)
        <tr>
            <td>{{ $rol->NIS }}</td>
            <td>{{ $rol->Descripcion }}</td>

        </tr>
    @empty
        <tr>
            <td colspan="6" align="center">
                No hay registros
            </td>
        </tr>
    @endforelse
    </tbody>
</table>
<a href="/" class="btn btn-secondary">Volver</a>
