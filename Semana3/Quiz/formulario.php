<!DOCTYPE html>
<html lang="en">
<head>
    <title>Operaciones</title>
</head>
<body>
    <div align="center">
        <form action="operaciones.php" method="post">
            <div class="form-group">
                <label for="numero1">Primer numero</label><br>
                <input type="number" name="numero1" id="numero1" placeholder="Digite un numero" required><br><br>
            </div>
             <div class="form-group">
                <label for="number2">Segundo numero</label><br>
                <input type="number" name="numero2" id="numero2" placeholder="Digite un numero" required><br><br>

                <label for="operacion">Operacion:</label><br>
                <select name="operacion" id="operacion" required>
                <option value="">--Seleccione--</option>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicacion</option>
                <option value="division">Division</option>
                </select><br><br>
            </div>
            <button type="submit">Enviar</button>  
            </form>  
    </div>
</body>
</html>


