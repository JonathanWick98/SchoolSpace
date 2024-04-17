<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/Crear.css') }}">

</head>
<body>
        <form action="{{ url('/alumnos') }}" method="post" enctype="multipart/form-data">

        <div style="display: flex; justify-content: center;">
            <img src="{{ asset('css/logo1.png') }}" alt="Imagen" style="width: 100%;">
        </div>

            {{ csrf_field() }}

            <label for="Nombre">{{ 'Nombre' }}</label>
            <input type="text" name="Nombre" id="Nombre" value=""><br>
            
            <label for="ApellidoPaterno">{{ 'Apellido Paterno' }}</label>
            <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value=""><br>
            
            <label for="ApellidoMaterno">{{ 'Apellido Materno' }}</label>
            <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value=""><br>
            
            <label for="Correo">{{ 'Correo' }}</label>
            <input type="email" name="Correo" id="Correo" value=""><br>
            
            <label for="Foto">{{ 'Foto' }}</label>
            <input type="file" name="Foto" id="Foto" value=""><br>

            <input type="submit" value="Agregar">
        </form>
</body>
</html>
