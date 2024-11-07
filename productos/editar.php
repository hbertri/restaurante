<!-- editar.php -->
<?php
require_once 'funciones.php';

// Verificar si se ha pasado un ID
$id = isset($_GET['id']) ? $_GET['id'] : null;
$producto = $id ? obtenerProducto($id) : null;

// Si se envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nombre' => $_POST['nombre'],
        'precio' => (float)$_POST['precio'],
        'descripcion' => $_POST['descripcion'],
        'categoría' => $_POST['categoria'],
        'disponible' => isset($_POST['disponible']),
        'imagen' => $_POST['imagen'],
    ];

    actualizarProducto($id, $data);
    header('Location: index.php'); // Redirigir a la lista de productos
    exit;
}

// Obtener todos los productos para la tabla
$productos = obtenerProductos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
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
        .form-container {
            margin-top: 20px;
            padding: 20px;
            background: #fff; /* Fondo blanco para el formulario */
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px; /* Espacio entre campos */
            border: 1px solid #ccc; /* Borde gris claro */
            border-radius: 5px; /* Bordes redondeados */
        }
        button {
            background-color: #2ecc71; /* Color del botón */
            color: white; /* Color del texto del botón */
            padding: 10px 20px;
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambia el cursor al pasar */
        }
        button:hover {
            background-color: #27ae60; /* Color más oscuro al pasar el ratón */
        }
    </style>
</head>
<body>

<h1>Lista de Productos</h1>

<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Descripción</th>
            <th scope="col">Categoría</th>
            <th scope="col">Disponible</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $key => $producto): ?>
            <tr>
                <th scope="row"><?php echo $key + 1; ?></th>
                <td><?php echo htmlspecialchars($producto->nombre); ?></td>
                <td><?php echo htmlspecialchars($producto->precio); ?></td>
                <td><?php echo htmlspecialchars($producto->descripcion); ?></td>
                <td><?php echo htmlspecialchars($producto->categoría); ?></td>
                <td><?php echo $producto->disponible ? 'Sí' : 'No'; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $producto->_id; ?>">Editar</a>
                    <a href="eliminar.php?id=<?php echo $producto->_id; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="form-container">
    <h2>Editar Producto</h2>
    <form method="POST" action="">
        <input type="text" name="nombre" value="<?php echo htmlspecialchars($producto->nombre); ?>" required>
        <input type="number" name="precio" value="<?php echo htmlspecialchars($producto->precio); ?>" step="0.01" required>
        <textarea name="descripcion" required><?php echo htmlspecialchars($producto->descripcion); ?></textarea>
        <input type="text" name="categoria" value="<?php echo htmlspecialchars($producto->categoría); ?>" required>
        <label>
            <input type="checkbox" name="disponible" <?php echo $producto->disponible ? 'checked' : ''; ?>>
            Disponible
        </label>
        <input type="text" name="imagen" value="<?php echo htmlspecialchars($producto->imagen); ?>" required>
        <button type="submit">Actualizar Producto</button>
    </form>
</div>

</body>
</html>