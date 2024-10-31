<?php
require_once 'funciones.php';

// Verifica si se ha proporcionado un ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Llama a la función para eliminar el producto
    $resultado = eliminarProducto($id);

    // Redirige a la lista de productos después de eliminar
    header('Location: index.php');
    exit;
} else {
    echo "ID no proporcionado.";
}
?>