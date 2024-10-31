<!-- index.php -->
<?php
require_once 'funciones.php';
$productos = obtenerProductos();
?>

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
            <td>
                <a href="editar.php?id=<?php echo $producto->_id; ?>">Editar</a>
                <a href="eliminar.php?id=<?php echo $producto->_id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="nuevo.php">Agregar Nuevo Producto</a>