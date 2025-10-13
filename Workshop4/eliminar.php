<?php
require_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']); // Convierte a entero por seguridad
    $consulta = $conexion->prepare("DELETE FROM usuarios WHERE id = ?");
    $consulta->bind_param("i", $id);
    $consulta->execute();
}

header("Location: listado.php");
exit;
?>
