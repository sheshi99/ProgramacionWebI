<?php
require_once "conexion.php";


$id = $_POST['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    $nombre         = trim($_POST['nombre']);
    $apellido       = trim($_POST['apellido']);
    $usuario        = trim($_POST['usuario']);
    $clave          = trim($_POST['clave']); // opcional al editar
    $estado         = trim($_POST['estado']); 
    $administrador  = trim($_POST['administrador']); 

    if (empty($nombre) || empty($apellido) || empty($usuario)) {
        echo "Por favor complete todos los campos.";
    } else {
        // Actualiza también la contraseña
        if ($clave) {
            $clave_hashed = password_hash($clave, PASSWORD_DEFAULT);
             $sql = "UPDATE usuarios 
                    SET nombre=?, apellido=?, usuario=?, clave=?, estado=?, administrador=? 
                    WHERE id=?";
            $consulta = $conexion->prepare($sql);
            $consulta->bind_param("ssssssi", $nombre, $apellido, $usuario, $clave_hashed, $estado, 
            $administrador, $id);
            

        } else {
            // Mantiene la contraseña actual
             $sql = "UPDATE usuarios 
                    SET nombre=?, apellido=?, usuario=?, estado=?, administrador=? 
                    WHERE id=?";
            $consulta = $conexion->prepare($sql);
            $consulta->bind_param("ssssii", $nombre, $apellido, $usuario, $estado, $administrador, $id);
            
        }
        $consulta->execute();
        $consulta->close();
        
        header("Location: listado.php");
        exit; 
        
    }
} elseif ($id) {
    // Cargar datos del usuario si se abre la página por primera vez
    $consulta_busqueda = $conexion->prepare("SELECT * FROM usuarios WHERE id=?");
    $consulta_busqueda->bind_param("i", $id);
    $consulta_busqueda->execute();
    $resultado = $consulta_busqueda->get_result();
    $usuario_seleccionado = $resultado->fetch_assoc();
    $consulta_busqueda->close();
    
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <?php include 'formulario_editar.php'; ?> 
</body>
</html>