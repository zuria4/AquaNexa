<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// comprar.php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

$idProducto = $input['idProducto'];
$cantidadSeleccionada = $input['cantidadSeleccionada'];
$idUsuario = $input['idUsuario'];

$conexion = new mysqli("localhost","root","","AquaNexa");

if ($conexion->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Error de conexión a la base de datos']));
}

// Verificar si hay suficiente stock
$query_stock = $conexion->prepare("SELECT cantidad FROM stock WHERE id = ?");
$query_stock->bind_param('i', $idProducto);
$query_stock->execute();
$resultado_stock = $query_stock->get_result();
$producto = $resultado_stock->fetch_assoc();

if ($producto['cantidad'] < $cantidadSeleccionada) {
    echo json_encode(['success' => false, 'message' => 'Stock insuficiente']);
    exit;
}

// Disminuir el stock
$query_update_stock = $conexion->prepare("UPDATE stock SET cantidad = cantidad - ? WHERE id = ?");
$query_update_stock->bind_param('ii', $cantidadSeleccionada, $idProducto);
$query_update_stock->execute();

// Registrar la venta
$fechaCompra = date('Y-m-d H:i:s');
$query_insert_venta = $conexion->prepare("INSERT INTO ventas (id_producto, id_usuario, fecha_compra) VALUES (?, ?, ?)");
$query_insert_venta->bind_param('iis', $idProducto, $idUsuario, $fechaCompra);
$query_insert_venta->execute();

if ($query_update_stock->affected_rows > 0 && $query_insert_venta->affected_rows > 0) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al procesar la compra']);
}

$conexion->close();
?>
