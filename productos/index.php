<!-- index.php -->
<?php
require_once 'funciones.php';
$productos = obtenerProductos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="public/css/styles.css"> 
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9; /* Fondo suave */
            margin: 0;
            padding: 20px;
            color: #333; /* Color de texto oscuro */
        }
        h1 {
            text-align: center;
            color: #2c3e50; /* Color del título */
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse; /* Colapsa bordes */
            margin: 20px 0;
            background-color: white; /* Fondo blanco para la tabla */
            border-radius: 8px; /* Bordes redondeados */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        }
        th, td {
            padding: 12px;
            text-align: left; /* Alinear texto a la izquierda */
            border-bottom: 1px solid #ddd; /* Línea divisoria entre filas */
        }
        th {
            background-color: #3498db; /* Color de fondo de encabezados */
            color: white; /* Color de texto de encabezados */
        }
        tr:hover {
            background-color: #f1f1f1; /* Color de fondo al pasar el ratón */
        }
        a {
            display: inline-block;
            margin: 5px;
            padding: 8px 12px;
            background-color: #e67e22; /* Color del botón */
            color: white; /* Color del texto del botón */
            text-decoration: none; /* Sin subrayado */
            border-radius: 5px; /* Bordes redondeados */
            transition: background-color 0.3s; /* Transición suave */
        }
        a:hover {
            background-color: #d35400; /* Color más oscuro al pasar el ratón */
        }
        .actions {
            display: flex; /* Usar flexbox para alinear botones */
            justify-content: space-around; /* Espaciado entre botones */
        }
    </style>
</head>
<body>

    <h1>Lista de Productos</h1>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Disponible</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?php echo htmlspecialchars($producto->nombre); ?></td>
                <td><?php echo htmlspecialchars($producto->precio); ?></td>
                <td><?php echo htmlspecialchars($producto->descripcion); ?></td>
                <td><?php echo htmlspecialchars($producto->categoría); ?></td>
                <td><?php echo $producto->disponible ? 'Sí' : 'No'; ?></td>
                <td class="actions">
                    <a href="editar.php?id=<?php echo $producto->_id; ?>">Editar</a>
                    <a href="eliminar.php?id=<?php echo $producto->_id; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="nuevo.php" style="background-color: #2ecc71; display: inline-block; padding: 10px 20px; color: white; text-decoration: none; border-radius: 5px; transition: background-color 0.3s;">Agregar Nuevo Producto</a>

</body>
</html>