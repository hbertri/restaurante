<?php
require_once 'funciones.php';  // Importar funciones necesarias
$clientes = obtenerClientes();  // Obtener la lista de clientes
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor y Servicio</title>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f46534; /* Un color suave de fondo */
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #f4ae34;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50; /* Un color oscuro para el título */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #3498db; /* Azul brillante */
            color: white;
        }
        tr:hover {
            background-color: #ecf0f1; /* Color claro al pasar el ratón */
        }
        button, a {
            background-color: #e67e22; /* Naranja vibrante */
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button {
            margin: 0 5px;
        }
        button:hover, a:hover {
            background-color: #d35400; /* Naranja más oscuro al pasar el ratón */
        }
        footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Sabor y Servicio</h1>
        </header>

        <main>
            <form action="acciones.php" method="post">  <!-- Acción del formulario -->
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clientes as $cliente): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($cliente->nombre); ?></td>
                                <td><?php echo htmlspecialchars($cliente->email); ?></td>
                                <td><?php echo htmlspecialchars($cliente->telefono); ?></td>
                                <td><?php echo htmlspecialchars($cliente->direccion); ?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $cliente->_id; ?>">Editar</a>
                                    <a href="eliminar.php?id=<?php echo $cliente->_id; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">Eliminar</a>
                                    
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <footer>
                    <a href="nuevo.php">Agregar Nuevo Cliente</a>
                </footer>
            </form>
        </main>
    </div>

</body>
</html>