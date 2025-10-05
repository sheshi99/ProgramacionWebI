
<?php

if (isset($_GET['usuario'])) {
    $usuario = $_GET['usuario'];
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
        <form>

            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario"
            value = "<?php echo htmlspecialchars($usuario); ?>" required>
            <br><br>
     
            <label for="contrasena">Contraseña: </label>
            <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña" required>
            <br><br>

            <button type="submit"> Iniciar sesión </button>
        </form>
    </div>
 </body>
 </html>