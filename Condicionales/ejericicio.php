<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP Match</title>
</head>
<body>
    <h1>Ejercicio: Calificación con Match</h1>
    <p>Ingresa un número de 0 a 100 y el programa te dirá la letra de calificación usando <code>match</code>.</p>

    <form method="post">
        <label for="nota">Tu nota:</label>
        <input type="number" name="nota" id="nota" min="0" max="100" required>
        <button type="submit">Ver calificación</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nota = intval($_POST["nota"]);

        // Usa match para determinar la calificación
        $calificacion = match (true) {
            $nota >= 90 && $nota <= 100 => "A",
            $nota >= 80 && $nota < 90 => "B",
            $nota >= 70 && $nota < 80 => "C",
            $nota >= 50 && $nota < 70 => "D",
            $nota < 50 && $nota >= 0 => "F",
            default => "Valor inválido",
        };

        $resultado = match ($calificacion){
            "A", "B", "C", "D" => "tu calificacion es $calificacion  y estas APROBADO",
            "F" => "tu calificaion es $calificacion LO SIENTO PERDISTE",
            default => "Error: calificación inválida"
        };

        echo $resultado;
    }
    ?>
</body>
</html>
