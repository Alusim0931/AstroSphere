<?php
// Array de productos
$productos = [
    "1" => "Producto 1",
    "2" => "Producto 2",
    "3" => "Producto 3"
];

// Definir el nombre del archivo CSV
$filename = "productos.csv";

// Configurar las cabeceras para descargar el archivo CSV
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');

// Abrir la salida estándar en modo escritura
$output = fopen('php://output', 'w');

// Escribir la cabecera del CSV (si es necesario)
// fputcsv($output, ['ID', 'Nombre']); // Puedes descomentar esto si quieres una cabecera en el archivo CSV

// Escribir cada producto en el archivo CSV
foreach ($productos as $id => $nombre) {
    fputcsv($output, [$id, $nombre], ';');
}

// Cerrar la conexión con el archivo CSV
fclose($output);
?>

