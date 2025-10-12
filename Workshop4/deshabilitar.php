<?php
require_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $sql = "UPDATE usuarios SET estado = 'Deshabilitado' WHERE id = ?";
    $consulta = $conexion->prepare($sql);
    $consulta->bind_param("i", $id);
    $consulta->execute();
}

header("Location: listado.php");
exit;
?>
