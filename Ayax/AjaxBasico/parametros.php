<?php
// Obtener los parámetros de la solicitud GET
$nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : 'Invitado';
$edad = isset($_GET['edad']) ? (int)$_GET['edad'] : 0;

// Crear una respuesta basada en los parámetros
if ($edad > 0) {
    echo "Hola, $nombre. Tienes $edad años.";
} else {
    echo "Hola, $nombre. No proporcionaste una edad válida.";
}
?>
