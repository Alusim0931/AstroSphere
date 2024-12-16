<?php
    function filtrado($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }


if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = filtrado($_POST["nombre"]);
    $correo = filtrado($_POST["correo"]);
    $educacion = filtrado($_POST["educacion"]);
    $avatar = filtrado($_POST["avatar"]);

}