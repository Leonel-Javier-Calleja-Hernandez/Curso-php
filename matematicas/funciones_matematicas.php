<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Funciones Matemáticas en PHP</title>
</head>
<body>
    <h2>Funciones Matemáticas en PHP</h2>

    <!-- Formulario donde el usuario ingresa un número -->
    <form method="post">
        <label for="numero">Ingresa un número:</label>
        <!-- type="number" permite ingresar números, step="any" deja poner decimales -->
        <input type="number" step="any" name="numero" id="numero" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Si el usuario ya envió un número con el formulario...
    if (isset($_POST["numero"])) {
        // Guardamos el número en la variable $n
        $n = $_POST["numero"];

        echo "<h3>Resultados con el número $n</h3>";

        // Aplicamos funciones matemáticas de PHP al número ingresado
        echo "abs($n) = " . abs($n) . "<br>";         // Valor absoluto
        echo "ceil($n) = " . ceil($n) . "<br>";       // Redondea hacia arriba
        echo "floor($n) = " . floor($n) . "<br>";     // Redondea hacia abajo
        echo "round($n) = " . round($n) . "<br>";     // Redondea al entero más cercano
        echo "sqrt($n) = " . sqrt($n) . "<br>";       // Raíz cuadrada
        echo "pow($n, 2) = " . pow($n, 2) . "<br>";   // Potencia ($n^2)
        echo "max($n, 10, -5) = " . max($n, 10, -5) . "<br>"; // Máximo de una lista
        echo "min($n, 10, -5) = " . min($n, 10, -5) . "<br>"; // Mínimo de una lista
        echo "rand(1, 100) = " . rand(1, 100) . "<br>";       // Número aleatorio entre 1 y 100
        echo "mt_rand(1, 100) = " . mt_rand(1, 100) . "<br>"; // Número aleatorio (más rápido)
        echo "pi() = " . pi() . "<br>";             // Constante matemática PI
        echo "sin($n) = " . sin($n) . "<br>";       // Seno del número (en radianes)
        echo "cos($n) = " . cos($n) . "<br>";       // Coseno del número (en radianes)
        echo "tan($n) = " . tan($n) . "<br>";       // Tangente del número (en radianes)
        echo "log($n) = " . log($n) . "<br>";       // Logaritmo natural
        echo "log10($n) = " . log10($n) . "<br>";   // Logaritmo en base 10
        echo "exp($n) = " . exp($n) . "<br>";       // e^$n (exponencial)


        // EJERCICIO
        echo"-------------------------------------";
        $num1 = rand();
        echo "EL NUMERO ES :" . $num1 . "<br>";

        $num2 = pow($num1, 2);
        echo "El resultado es: " . $num2;
        $num1 = 5.22204;
        echo " Redondeado es " . round($num1,2); 
    }
    ?>
</body>
</html>
