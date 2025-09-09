<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estructura de una Función en PHP</title>
</head>
<body>
    <h2>Ejemplo de Funciones en PHP</h2>

    <?php
    // 1. Función sin parámetros y sin retorno
    function saludar() {
        echo "¡Hola, bienvenido a PHP!<br>";
    }

    // 2. Función con parámetros
    function sumar($a, $b) {
        $resultado = $a + $b;
        echo "La suma de $a + $b = $resultado<br>";
    }

    // 3. Función con parámetros y retorno
    function cuadrado($numero) {
        return $numero * $numero;
    }

    // --- Uso de las funciones ---
    saludar();             // Llamamos a la primera función
    sumar(5, 3);           // Llamamos a la segunda función
    $res = cuadrado(4);    // Guardamos el resultado de la tercera
    echo "El cuadrado de 4 es $res";
    ?>
</body>
</html>
