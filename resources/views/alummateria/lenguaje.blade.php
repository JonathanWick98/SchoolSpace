<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('css/galaxi.gif'); /* Ruta relativa al archivo de imagen */
            background-size: cover; /* Para que el fondo cubra toda la pantalla */
            color: #FFFCF7; /* Color del texto */
            display: flex;
        }

        .navbar {
            background-color: #141325;
            color: #fff;
            padding: 10px 20px;
            text-align: left;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            min-height: 100vh; /* Mínimo tamaño de la pantalla */
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 10px;
            margin: 5px; /* Margen para evitar que el color de fondo se salga */
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: calc(100% - 10px); /* Ocupar todo el ancho menos el margen */
            text-align: left;
            display: block; /* Mostrar en cascada */
        }

        .navbar a:hover {
            background-color: #65a675;
        }

        .container {
            max-width: 800px;
            margin: 50px auto auto; /* Ajuste del margen superior para evitar superposición con el navbar */
            text-align: center;
            background-color: rgba(20, 19, 37, 0.8); /* Color del contenedor de texto con transparencia */
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap; /* Permite que las cartas se envuelvan en filas */
            justify-content: center; /* Centra las filas horizontalmente */
        }

        .card {
            background-color: rgba(103, 181, 136, 0.8); /* Color de fondo de la carta con transparencia */
            padding: 20px;
            margin: 10px; /* Margen entre las cartas */
            border-radius: 10px;
            width: calc(33.33% - 20px); /* Tamaño de cada carta */
            text-align: center; /* Alinea el texto al centro */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); /* Sombra difuminada */
        }

        .card h3 {
            font-size: 1.5rem; /* Tamaño del título */
            margin-bottom: 10px; /* Espacio entre el título y el párrafo */
            color: #fff; /* Color del título */
        }

        .card p {
            font-size: 1rem; /* Tamaño del texto */
            margin-bottom: 0; /* Eliminar el espacio inferior del párrafo */
            color: #fff; /* Color del texto */
        }

        h1 {
            color: #67b588;
        }

        p {
            color: #ffffff;
            font-size: 18px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #65a675;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #67b588;
        }

        .logo {
            text-align: center;
            padding: 20px;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('css/Logo2.1.png') }}" alt="Logo de School Space" style="width: 250px;">
        </div>
        <a href="{{ route('alumnoinfo.start') }}">Inicio</a>
        <a href="{{ route('alumnoinfo.expe') }}">Expediente del Alumno</a>
        <a href="{{ route('alumnoinfo.nota') }}">Notas</a>
        <a href="{{ route('alumnoinfo.materia') }}">Materias</a>
        <a href="{{ route('alumnoinfo.ayuda') }}">Ayuda</a>
        <a href="{{ route('alumnoinfo.contacto') }}">Contacto</a>
        <a href="{{ route('alumnoinfo.acerca') }}">Acerca de Nosotros</a>
    </div>
    <div class="container">
        <div class="card">
            <h3 style="color: #fff;">Semana 1</h3>
            <p>Contenido de la semana 1</p>
        </div>
        <div class="card">
            <h3 style="color: #fff;">Semana 2</h3>
            <p>Contenido de la semana 2</p>
        </div>
        <div class="card">
            <h3 style="color: #fff;">Semana 3</h3>
            <p>Contenido de la semana 3</p>
        </div>
        <div class="card">
            <h3 style="color: #fff;">Semana 4</h3>
            <p>Contenido de la semana 4</p>
        </div>
        <div class="card">
            <h3 style="color: #fff;">Semana 5</h3>
            <p>Contenido de la semana 5</p>
        </div>
        <div class="card">
            <h3 style="color: #fff;">Semana 6</h3>
            <p>Contenido de la semana 6</p>
        </div>
    </div>
</body>
</html>
