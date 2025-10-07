<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    $usuario = '';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <div style="text-align: center; margin-top: 50px;">
        
        <h2>Login</h2> 
        <form method="POST">

            <div>
                <label for="usuario">Usuario: </label>
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario"
                value = "<?php echo htmlspecialchars($usuario); ?>" required readonly>
            </div>
            <br>

            <div>
                <label for="contrasena">Contraseña: </label>
                <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña" required>
            </div>
            <br>

            <button type="submit"> Iniciar sesión </button>
            <br><br>

            <div>
                <a href="formulario.php">Nuevo Registro</a>
            </div>

        </form>
    </div>
</body>
</html>
