<!-- nuevo.php -->
<?php
require_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nombre' => $_POST['nombre'],
        'precio' => (float)$_POST['precio'],
        'descripcion' => $_POST['descripcion'],
        'categoría' => $_POST['categoria'],
        'disponible' => isset($_POST['disponible']),
        'imagen' => $_POST['imagen'],
    ];
    
    crearProducto($data);
    header('Location: index.php'); // Redirigir a la lista de productos
}
?>

<h1>Agregar Nuevo Producto</h1>

<form method="POST" action="">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="number" name="precio" placeholder="Precio" step="0.01" required>
    <textarea name="descripcion" placeholder="Descripción" required></textarea>
    <input type="text" name="categoria" placeholder="Categoría" required>
    <label>
        <input type="checkbox" name="disponible" checked>
        Disponible
    </label>
    <input type="text" name="imagen" placeholder="Imagen (ej. hamburguesa.jpg)" required>
    <button type="submit">Agregar Producto</button>
</form>