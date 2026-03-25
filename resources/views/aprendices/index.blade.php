<h2>Lista de Aprendices</h2>

{{-- Mensaje de éxito --}}
@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<br>

<a href="{{ route('aprendices.create') }}">
    Registrar nuevo aprendiz
</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
    <tr>
        <th>NIS</th>
        <th>Tipo Doc</th>
        <th>Documento</th>
        <th>Nombre completo</th>
        <th>Teléfono</th>
        <th>Correo personal</th>
        <th>Ficha</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @forelse($aprendiz as $aprendiz)
        <tr>
            <td>{{ $aprendiz->NIS }}</td>
            <td>{{ $aprendiz->tbltiposdocumento_NIS }}</td>
            <td>{{ $aprendiz->Numdoc }}</td>
            <td>{{ $aprendiz->Nombres }} {{ $aprendiz->Apellidos }}</td>
            <td>{{ $aprendiz->Telefono }}</td>
            <td>{{ $aprendiz->CorreoPersonal }}</td>
            <td>{{ $aprendiz->tblfichadecaraterizacion_NIS }}</td>

            <td>
                <a href="{{ route('aprendices.show', $aprendiz->NIS) }}">Ver</a>
                |
                <a href="{{ route('aprendices.edit', $aprendiz->NIS) }}">Editar</a>
                |

                <form action="{{ route('aprendices.destroy', $aprendiz->NIS) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            onclick="return confirm('¿Seguro que deseas eliminar este aprendiz?')">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>

    @empty
        <tr>
            <td colspan="8" align="center">
                No hay aprendices registrados
            </td>
        </tr>
    @endforelse

    </tbody>
</table>
<a href="@dashboardRoute" class="btn btn-outline-success">
    <i class="bi bi-arrow-left"></i> Volver
</a>
