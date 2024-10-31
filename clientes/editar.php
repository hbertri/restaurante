<?php
require_once 'funciones.php';

$id = $_GET['id'];
$cliente = obtenerCliente($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nombre' => $_POST['nombre'],
        'email' => $_POST['email'],
        'telefono' => $_POST['telefono'],
    ];
    
    actualizarCliente($id, $data);
    header('Location: index.php'); // Redirigir a la lista de clientes
}
?>

<h1>Editar Cliente</h1>

<form method="POST" action="">
    <input type="text" name="nombre" value="<?php echo htmlspecialchars($cliente->nombre); ?>" required>
    <input type="email" name="email" value="<?php echo htmlspecialchars($cliente->email); ?>" required>
    <input type="text" name="telefono" value="<?php echo htmlspecialchars($cliente->telefono); ?>" required>
    <button type="submit">Actualizar Cliente</button>
</form>