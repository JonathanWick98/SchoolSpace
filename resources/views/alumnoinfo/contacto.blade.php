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
            background-image: url('css/galaxi.gif'); /* Fondo */
            background-size: cover; /* Para que el fondo cubra toda la pantalla */
            color: #FFFCF7; /* Color del texto */
            display: flex;
            justify-content: center;
            align-items: center;
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
            background-color: #141325; /* Color del contenedor de texto */
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            color: #67b588;
        }

        p {
            color: #ffffff;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 10px; /* Espaciado inferior */
        }

        strong {
            color: #67b588; /* Color del texto destacado */
        }

        form {
            text-align: left; /* Alineación del formulario */
            margin-top: 20px; /* Espaciado superior */
            max-width: 400px; /* Ancho máximo del formulario */
            margin-left: auto; /* Centrar el formulario horizontalmente */
            margin-right: auto;
        }

        label {
            display: block; /* Hacer que las etiquetas ocupen todo el ancho */
            margin-bottom: 5px; /* Espaciado inferior */
            color: #67b588; /* Color del texto de la etiqueta */
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%; /* Ancho completo */
            padding: 8px; /* Espaciado interno */
            margin-bottom: 10px; /* Espaciado inferior */
            border-radius: 5px; /* Bordes redondeados */
            border: 1px solid #ccc; /* Borde del campo */
            background-color: #222; /* Color de fondo del campo */
            color: #fff; /* Color del texto */
            box-sizing: border-box; /* Incluir el padding y el borde en el ancho total */
            max-width: 100%; /* Ancho máximo igual al contenedor */
        }

        button {
            background-color: #65a675; /* Color de fondo del botón */
            color: #fff; /* Color del texto del botón */
            border: none; /* Sin borde */
            padding: 10px 20px; /* Espaciado interno */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cursor de puntero */
            transition: background-color 0.3s ease; /* Transición suave */
            width: 100%; /* Ancho completo */
            max-width: 100%; /* Ancho máximo igual al contenedor */
        }

        button:hover {
            background-color: #67b588; /* Cambio de color al pasar el cursor */
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
        <!-- Sección de información de contacto -->
        <div class="contacto">
            <h2>Información de Contacto</h2>
            <p>Si necesitas asistencia personalizada, contáctanos:</p>
            <div class="contacto-info">
                <strong>Correo Electrónico:</strong> schoolspace@hotmail.com
            </div>
            <div class="contacto-info">
                <strong>Teléfono:</strong> +503 7726 0358
            </div>
            <form action="/enviar-correo" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                <button type="submit">Enviar Mensaje</button>
            </form>
        </div>
    </div>
</body>
</html>
