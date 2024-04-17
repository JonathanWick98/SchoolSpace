<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Inicio.css') }}">
    <title>Lista de Alumnos</title>
    
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido Materno</th>
                <th>Apellido Paterno</th>
                <th>Correo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $alumno->Foto }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->ApellidoMaterno }}</td>
                <td>{{ $alumno->ApellidoPaterno }}</td>
                <td>{{ $alumno->Correo }}</td>
                <td class="action-buttons">
                    <a href="{{ url('/alumnos/' . $alumno->id) }}" class="button">Ver</a>
                    <button>Editar</button>
                    <form method="post" action="{{ url('/alumnos/' . $alumno->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
