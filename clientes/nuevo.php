<?php
require_once 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nombre' => $_POST['nombre'],
        'email' => $_POST['email'],
        'telefono' => $_POST['telefono'],
    ];
    
    crearCliente($data);
    header('Location: index.php'); // Redirigir a la lista de clientes
}
?>

<h1>Agregar Nuevo Cliente</h1>

<form method="POST" action="">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <button type="submit">Agregar Cliente</button>
</form>