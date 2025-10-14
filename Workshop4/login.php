<?php
session_start();
require_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario']);
    $clave = trim($_POST['clave']);

    if (empty($usuario) || empty($clave)) {
        echo "Por favor complete todos los campos.";
        exit;
    }

    // Buscar solo por usuario
    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $consulta = $conexion->prepare($sql);
    $consulta->bind_param("s", $usuario);
    $consulta->execute();
    $resultado = $consulta->get_result();

    if ($resultado->num_rows === 1) {
        $fila = $resultado->fetch_assoc();

        // Revisar estado
        if (($fila['estado'] ?? '') !== 'Activo') {
            echo "Usuario deshabilitado. Contacte al administrador.";
            exit;
        }

        // Verificar contraseña con hash
        if (password_verify($clave, $fila['clave'])) {
            // Éxito: crear sesión
            $_SESSION['usuario'] = $fila['usuario'];
            $_SESSION['administrador'] = (int)$fila['administrador'];
            $_SESSION['estado'] = $fila['estado'];
            header("Location: listado.php");
            exit;
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    } else {
        echo "Usuario o contraseña incorrectos.";
    }

    $consulta->close();
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>

    <form method="POST" action="">
        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </div><br>

        <div>
            <label for="clave">Contraseña:</label>
            <input type="password" id="clave" name="clave" required>
        </div><br>

        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>

