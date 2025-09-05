<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERADORES MATEMATICOS</title>
</head>
<body>
    <?php

//operadores MATEMATICOS 
$a = 10;
$b = 3;

echo "Suma: " . ($a + $b) . "\n";
echo "Resta: " . ($a - $b) . "\n";
echo "Multiplicación: " . ($a * $b) . "\n";
echo "División: " . ($a / $b) . "\n";
echo "Módulo (resto): " . ($a % $b) . "\n";
echo "Potencia: " . ($a ** $b) . "\n";

//Operadores de ASIGNACION COMPUESTA

$x = 5;

echo "Valor inicial: $x\n"; //5

// Incremento y decremento
echo "Post-incremento (x++): " . $x++ . "\n"; // muestra 5, luego $x = 6
echo "Pre-incremento (++x): " . ++$x . "\n"; // primero suma, luego muestra → 7
echo "Post-decremento (x--): " . $x-- . "\n"; // muestra 7, luego $x = 6
echo "Pre-decremento (--x): " . --$x . "\n"; // primero resta, luego muestra → 5

// Asignación compuesta
$x += 3; // $x = $x + 3 → 8
echo "Después de x += 3: $x\n";

$x -= 2; // $x = $x - 2 → 6
echo "Después de x -= 2: $x\n";

$x *= 4; // $x = $x * 4 → 24
echo "Después de x *= 4: $x\n";

$x /= 6; // $x = $x / 6 → 4
echo "Después de x /= 6: $x\n";

$x %= 3; // $x = $x % 3 → 1
echo "Después de x %= 3: $x\n";


    ?>
</body>
</html>