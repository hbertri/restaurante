<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Restaurante Sabor y Servicio</title>
    <link rel="stylesheet" href="public/css/styles.css"> 
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('public/images/restaurante-bg.jpg'); /* Cambia esta ruta por la de tu imagen */
            background-size: cover; /* Ajusta la imagen al tamaño de la pantalla */
            background-position: center; /* Centra la imagen */
            margin: 0;
            padding: 20px;
            color: #fff; /* Color de texto blanco para contraste */
            line-height: 1.6; /* Mejor legibilidad */
        }
        h1 {
            text-align: center;
            color: #c0392b; /* Color rojo oscuro para el título */
            font-size: 2.8em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Sombra para mejorar la legibilidad */
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Sombra más pronunciada */
        }
        p {
            text-align: center; /* Centra los enlaces */
            margin: 15px 0;
        }
        a {
            display: inline-block;
            margin: 10px 0;
            padding: 15px 25px;
            background-color: #e67e22; /* Color naranja cálido */
            color: white; /* Color del texto de los enlaces */
            text-decoration: none; /* Sin subrayado */
            border-radius: 5px; /* Bordes redondeados */
            font-weight: bold; /* Texto en negrita */
            font-size: 1.1em; /* Tamaño de fuente mayor */
            transition: background-color 0.3s, transform 0.3s; /* Transición suave */
        }
        a:hover {
            background-color: #d35400; /* Color más oscuro al pasar el ratón */
            transform: translateY(-2px); /* Efecto de elevación al pasar el ratón */
        }
        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #fff; /* Color blanco para el texto del pie de página */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Restaurante Sabor y Servicio</h1>
        <p><a href="clientes/index.php">CLIENTES</a></p>
        <p><a href="productos/index.php">PRODUCTOS</a></p>
        <!-- Aquí puedes añadir más enlaces a otras secciones de tu aplicación -->
        <footer>
            &copy;  
        </footer>
    </div>
</body>
</html>