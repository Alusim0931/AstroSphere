<?php
// Obtener el User-Agent del cliente
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Función para verificar si el navegador es Firefox
function esFirefox($userAgent) {
    return strpos($userAgent, 'Firefox') !== false;
}

// Comprobar si es Firefox
if (esFirefox($userAgent)) {
    // Si el navegador es Firefox, mostrar el contenido de la página
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Página para Firefox</title>";
    echo "</head>";
    echo "<body>";
    echo "<h1>Bienvenido a la página</h1>";
    echo "<p>Estás utilizando Firefox, por lo que puedes ver el contenido de esta página.</p>";
    echo "</body>";
    echo "</html>";
} else {
    // Si el navegador no es Firefox, mostrar un mensaje de aviso
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Acceso Restringido</title>";
    echo "</head>";
    echo "<body>";
    echo "<h1>Acceso Restringido</h1>";
    echo "<p>Esta página solo está disponible para usuarios de Firefox.</p>";
    echo "</body>";
    echo "</html>";
}
?>
