<?php
    require_once __DIR__ .'/../config/database.php';

// Crear un nuevo cliente
function crearCliente($data) {
    global $clientesCollection;
    return $clientesCollection->insertOne($data);
}

// Leer todos los clientes
function obtenerClientes() {
    global $clientesCollection;
    return $clientesCollection->find()->toArray();
}

// Leer un cliente por ID
function obtenerCliente($id) {
    global $clientesCollection;
    return $clientesCollection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
}

// Actualizar un cliente
function actualizarCliente($id, $data) {
    global $clientesCollection;
    return $clientesCollection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectId($id)],
        ['$set' => $data]
    );
}

// Eliminar un cliente
function eliminarCliente($id) {
    global $clientesCollection;
    return $clientesCollection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
}
?>