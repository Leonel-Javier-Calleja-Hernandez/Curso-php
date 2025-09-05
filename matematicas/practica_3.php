<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCREMENTO y DECREMENTO</title>
</head>
<body>

    <h2>Operaciones de Incremento y Decremento</h2>

    <form name="form1" method="post">
        <p>
            <label for="num1">Número 1:</label>
            <input type="text" name="num1" id="num1" required>

            <label for="operacion">Operación:</label>
            <select name="operacion" id="operacion">
                <option value="incremento">Incremento</option>
                <option value="decremento">Decremento</option>
            </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar">
        </p>
    </form>

    <hr>

    <?php include("Increment_Decrement.php"); ?>
</body>
</html>
