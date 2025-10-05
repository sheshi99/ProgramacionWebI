<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gestor de Proyectos TIC</title>
</head>
<body>
    <div align="center">
        <form action="print.php" method="post">
            <div class="form-group">
                <label for="proyecto">Nombre del proyecto</label><br>
                <input type="text" name="proyecto" id="proyecto" placeholder="Escribe el nombre del proyecto" required><br><br>
            </div>
            <div class="form-group">
                <label for="cliente">Cliente</label><br>
                <input type="text" name="cliente" id="cliente" placeholder="Nombre del cliente" required><br><br>
            </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha de inicio</label><br>
                <input type="date" name="fecha_inicio" id="fecha_inicio" required><br><br>
            </div>
            <div class="form-group">
                <label for="presupuesto">Presupuesto</label><br>
                <input type="number" name="presupuesto" id="presupuesto" placeholder="Monto en $" required><br><br>
            </div>
            <div class="form-group">
                <label for="responsable">Responsable del proyecto</label><br>
                <input type="text" name="responsable" id="responsable" placeholder="Nombre del responsable" required><br><br>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>



