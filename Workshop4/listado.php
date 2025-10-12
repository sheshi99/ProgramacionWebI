<?php
session_start();
require_once "conexion.php";

// Bloquear acceso si no hay sesión
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit;
}

// Obtener todos los usuarios
$resultado = $conexion->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Usuarios</title>
</head>
<body>
    <h2>Listado de Usuarios</h2>

    <?php if($_SESSION['administrador'] == 1): ?>
    <a href="agregar.php">➕ Agregar Usuario</a>
    <?php endif; ?>


    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Usuario</th>
            <th>Estado</th>
            <th>Administrador</th>
            <?php if($_SESSION['administrador']==1): ?>
            <th>Acciones</th>
            <?php endif; ?>
        </tr>

        <?php while($fila = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($fila['id']) ?></td>
            <td><?= htmlspecialchars($fila['nombre']) ?></td>
            <td><?= htmlspecialchars($fila['apellido']) ?></td>
            <td><?= htmlspecialchars($fila['usuario']) ?></td>
            <td><?= htmlspecialchars($fila['estado']) ?></td>
            <td><?= $fila['administrador']==1 ? 'Sí' : 'No' ?></td>

            <?php if($_SESSION['administrador']==1): ?>
            <td>
                <!-- Editar -->
                <form action="editar.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $fila['id'] ?>">
                    <button type="submit">✏️</button>
                </form>

                <!-- Deshabilitar -->
                <form action="deshabilitar.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $fila['id'] ?>">
                    <button type="submit"
                    onclick="return confirm('¿Seguro que desea deshabilitar este usuario?');">🚫</button>
                </form>

                <!-- Eliminar -->
                <form action="eliminar.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $fila['id'] ?>">
                    <button type="submit" 
                    onclick="return confirm('¿Seguro que desea eliminar este usuario?');">🗑️</button>
                </form>
            </td>
            <?php endif; ?>
        </tr>
        <?php endwhile; ?>
    </table>

    <br>
    <a href="salir.php">⬅️ Cerrar Sesión</a>

<?php
// Cerrar resultado y conexión
$resultado->close();
$conexion->close();
?>
</body>
</html>
