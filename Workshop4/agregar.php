<?php
require_once "conexion.php";

$nombre = $apellido = $usuario = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre    = trim($_POST['nombre']);
    $apellido  = trim($_POST['apellido']);
    $usuario   = trim($_POST['usuario']);
    $clave     = trim($_POST['clave']);
    $confirmar = trim($_POST['confirmar_clave']);
    $administrador = intval($_POST['administrador'] ?? 0);
    $estado = "Activo";

    if (empty($nombre) || empty($apellido) || empty($usuario) || empty($clave) || empty($confirmar)) {
        echo "Por favor complete todos los campos.";

    } elseif ($clave !== $confirmar) {
        echo "Las contraseñas no coinciden.";

    } else {
        // Encriptar contraseña
        $clave = password_hash($clave, PASSWORD_DEFAULT); 

        // Preparar la consulta
        $sql = "INSERT INTO usuarios (nombre, apellido, usuario, clave, estado, administrador) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $consulta = $conexion->prepare($sql); 
        $consulta->bind_param("sssssi", $nombre, $apellido, $usuario, $clave, $estado, $administrador);

        if ($consulta->execute()) {
            echo "Usuario agregado correctamente.";
        } else {
            echo "Error: " . $consulta->error;
        }

        $consulta->close();
        $conexion->close();

        header("Location: listado.php");
        exit; 
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <?php include 'formulario_agregar.php'; ?> 
</body>
</html>
