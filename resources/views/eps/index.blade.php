<h2>Lista de EPS</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<br>

<a href="{{ route('eps.create') }}">
    Crear nueva EPS
</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
    <tr>
        <th>NIS</th>
        <th>Tipo Doc</th>
        <th>Denominación</th>
        <th>Observaciones</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @forelse($eps as $item)
        <tr>
            <td>{{ $item->NIS }}</td>
            <td>{{ $item->Tdoc }}</td>
            <td>{{ $item->Donominacion }}</td>
            <td>{{ $item->Observaciones }}</td>

            <td>
                {{-- BOTON EDITAR --}}
                <a href="{{ route('eps.edit', $item->NIS) }}">
                    Editar
                </a>

                |

                {{-- BOTON ELIMINAR --}}
                <form action="{{ route('eps.destroy', $item->NIS) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            onclick="return confirm('¿Seguro que deseas eliminar este registro?')">
                        Eliminar
                    </button>

                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" align="center">No hay registros</td>
        </tr>
    @endforelse
    </tbody>
</table>
