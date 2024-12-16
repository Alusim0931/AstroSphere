<?php
// Obtener los datos enviados por GET
$usuario = $_GET['usuario'];
$clave = $_GET['clave'];

// Verificar las credenciales
if ($usuario === 'raul' && $clave === '123456') {
  echo "Usuario correcto"; // Si las credenciales son correctas
} else {
  echo "Usuario incorrecto"; // Si las credenciales son incorrectas
}
?>
