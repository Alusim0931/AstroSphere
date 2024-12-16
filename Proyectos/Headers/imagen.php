<?php
// Parámetro de acceso
$letMeIn = isset($_GET['letMeIn']) ? $_GET['letMeIn'] : null;

// Parámetro de imagen
$imagen = isset($_GET['imagen']) ? $_GET['imagen'] : null;

// Ruta base de la carpeta donde se almacenan las imágenes (ajusta la ruta a tu servidor local)
$rutaImagenes = 'C:/xampp/htdocs/Proyectos/images/'; // Usa / en lugar de \ para rutas en PHP

// Verificar si el parámetro letMeIn está presente y es igual a 1
if ($letMeIn !== '1') {
    // Si el parámetro letMeIn no está presente o no es 1, mostrar imagen de error 401
    header('Content-Type: image/jpeg');
    header('HTTP/1.1 401 Unauthorized');
    // Ruta a la imagen de error 401 (puedes usar la misma 404 si no tienes otra)
    readfile($rutaImagenes . '404.jpg'); // Asegúrate de que esta imagen existe
    exit();
}

// Ruta completa del archivo de imagen
$rutaArchivo = $rutaImagenes . $imagen;

// Verificar si el archivo de imagen existe
if (file_exists($rutaArchivo)) {
    // Si la imagen existe, mostrarla
    header('Content-Type: image/jpeg');
    readfile($rutaArchivo);
} else {
    // Si la imagen no existe, mostrar imagen de error 404
    header('Content-Type: image/jpeg');
    header('HTTP/1.1 404 Not Found');
    // Ruta a la imagen de error 404
    readfile($rutaImagenes . '404.jpg'); // Asegúrate de que esta imagen existe
}
?>
