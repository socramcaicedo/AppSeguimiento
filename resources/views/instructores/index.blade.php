<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Instructores</title>
</head>

<body>

<h2>Lista de Instructores</h2>

<a href="{{ route('instructores.create') }}">Crear Instructor</a>

<br><br>

<table border="1" cellpadding="10">

    <tr>
        <th>NIS</th>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Acciones</th>
    </tr>

    @foreach($instructores as $instructor)

        <tr>
            <td>{{ $instructor->NIS }}</td>
            <td>{{ $instructor->Numdoc }}</td>
            <td>{{ $instructor->Nombres }} {{ $instructor->Apellidos }}</td>
            <td>{{ $instructor->Telefono }}</td>
            <td>{{ $instructor->CorreoInstitucional }}</td>

            <td>

                <a href="{{ route('instructores.show',$instructor->NIS) }}">Ver</a>

                |

                <a href="{{ route('instructores.edit',$instructor->NIS) }}">Editar</a>

                |

                <form action="{{ route('instructores.destroy',$instructor->NIS) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            onclick="return confirm('¿Seguro que deseas eliminar este Instructor?')">
                        Eliminar
                    </button>
                </form>

            </td>
        </tr>

    @endforeach

</table>
<a href="@dashboardRoute" class="btn btn-outline-success">
    <i class="bi bi-arrow-left"></i> Volver
</a>

</body>
</html>
