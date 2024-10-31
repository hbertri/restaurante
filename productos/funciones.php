<?php
    require_once __DIR__ .'/../config/database.php';

// Crear un nuevo producto
function crearProducto($data) {
    global $productosCollection;
    return $productosCollection->insertOne($data);
}

// Leer todos los productos
function obtenerProductos() {
    global $productosCollection;
    return $productosCollection->find()->toArray();
}

// Leer un producto por ID
function obtenerProducto($id) {
    global $productosCollection;
    return $productosCollection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
}

// Actualizar un producto
function actualizarProducto($id, $data) {
    global $productosCollection;
    return $productosCollection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectId($id)],
        ['$set' => $data]
    );
}

// Eliminar un producto
function eliminarProducto($id) {
    global $productosCollection;
    return $productosCollection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
}
?>