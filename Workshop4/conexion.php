<?php

$servidor = "localhost";
$usuario = "usuario_gestor";
$contrasena = "access_BD_90";
$baseDatos = "usuarios_sistema";

try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conexion = new mysqli($servidor, $usuario, $contrasena, $baseDatos);
    $conexion->set_charset("utf8");

} catch (Exception $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}

?>
