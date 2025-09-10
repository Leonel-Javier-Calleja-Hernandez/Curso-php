<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle while en PHP</title>
</head>
<body>
    <h1>Ejemplo de Bucle while en PHP</h1>

    <?php
    // Inicializamos una variable
    $contador = 1;

    // Bucle while: mientras $contador sea menor o igual a 5, se ejecuta el bloque de código
    while ($contador <= 5) {
        echo "<p>Este es el número: $contador</p>"; // Imprime el número actual
        $contador++; // Incrementamos la variable para evitar un bucle infinito
    }

    // Al finalizar el bucle, $contador será 6
    echo "<p>Bucle terminado. Valor final de contador: $contador</p>";
    ?>
    
</body>
</html>
