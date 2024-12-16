<?php
// Array de URLs de imágenes para cambiar
$imagenes = ['/images/drumbeat.png', 'images/drumbeat.png', 'images/drumbeat.png'];

// Elegir una imagen aleatoria
$imagenAleatoria = $imagenes[array_rand($imagenes)];

// Imprimir la URL de la imagen
echo $imagenAleatoria;
?>
