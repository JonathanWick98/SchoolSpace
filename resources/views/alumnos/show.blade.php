<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Detalles.css') }}">

    <title>Detalles del Alumno</title>

</head>
<body>
    <div class="container">
        <h1>Detalles del Alumno</h1>
        <img src="{{ asset('storage/' . $alumno->Foto) }}" alt="Foto del alumno">
        <p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
        <p><strong>Apellido Paterno:</strong> {{ $alumno->ApellidoPaterno }}</p>
        <p><strong>Apellido Materno:</strong> {{ $alumno->ApellidoMaterno }}</p>
        <p><strong>Correo:</strong> {{ $alumno->Correo }}</p>
    </div>
</body>
</html>
