<?php
require_once '../classes/Producto.php';

header('Content-Type: application/json');

$producto = new Producto(1, "Laptop", "Laptop Gamer", 1200, 5);

echo json_encode($producto->toArray());
