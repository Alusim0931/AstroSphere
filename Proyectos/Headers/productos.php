<?php
// Array de productos
$productos = [
    "1" => "Producto 1",
    "2" => "Producto 2",
    "3" => "Producto 3"
];

// Obtener el parámetro 'id' de la URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Verificar si el parámetro 'id' existe en el array de productos
if ($id !== null && array_key_exists($id, $productos)) {
    // Mostrar el producto correspondiente
    $producto = $productos[$id];
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>$producto</title>";
    echo "</head>";
    echo "<body>";
    echo "<h1>$producto</h1>";
    echo "</body>";
    echo "</html>";
} else {
    // Si el producto no existe, enviar cabecera 404 y mostrar mensaje de error
    http_response_code(404);
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Producto no encontrado</title>";
    echo "</head>";
    echo "<body>";
    echo "<h1>404 - Producto no encontrado</h1>";
    echo "<p>El producto que estás buscando no existe.</p>";
    echo "</body>";
    echo "</html>";
}
?>

