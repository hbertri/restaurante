<!-- editar.php -->
<?php
require_once 'funciones.php';

$id = $_GET['id'];
$producto = obtenerProducto($id);

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
    header('Location: index.php');
}
?>

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