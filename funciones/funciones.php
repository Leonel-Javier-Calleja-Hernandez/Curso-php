<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplos de Funciones en PHP</title>
</head>
<body>
    <h1>Ejemplos de Funciones en PHP</h1>
    <pre>
<?php
/*
==================================================
1. FUNCIONES DEFINIDAS POR EL USUARIO
==================================================
*/

// 1.1 Función simple SIN parámetros ni retorno
function saludar() {
    echo "Hola Mundo!\n";
}
saludar(); // Llamamos la función

// 1.2 Función con PARÁMETROS
function saludarPersona($nombre) {
    echo "Hola, $nombre!\n";
}
saludarPersona("Leonel"); // Llamamos pasando un dato

// 1.3 Función con RETORNO
function sumar($a, $b) {
    return $a + $b;
}
echo "5 + 3 = " . sumar(5, 3) . "\n";

// 1.4 Función con PARÁMETROS y RETORNO
function calcularAreaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}
echo "Área de triángulo (10x5) = " . calcularAreaTriangulo(10, 5) . "\n";


/*
==================================================
2. VARIABLES Y FUNCIONES
==================================================
*/

// 2.1 Pasar variables como parámetros (mejor práctica)
$numero1 = 10;
$numero2 = 20;

function sumarDosNumeros($a, $b) {
    return $a + $b;
}
echo "Suma con parámetros: " . sumarDosNumeros($numero1, $numero2) . "\n";

// 2.2 Usar GLOBAL (NO recomendado, pero funciona)
$nombre = "Leonel";
function mostrarNombreGlobal() {
    global $nombre; // Hacemos accesible la variable de fuera
    echo "Usando global: Hola, $nombre!\n";
}
mostrarNombreGlobal();

// 2.3 Usar $GLOBALS
$edad = 25;
function mostrarEdad() {
    echo "Usando \$GLOBALS: Tienes " . $GLOBALS["edad"] . " años\n";
}
mostrarEdad();


/*
==================================================
3. FUNCIONES PREDEFINIDAS EN PHP
==================================================
*/

// 3.1 Funciones de cadenas
$texto = "Hola Mundo PHP";
echo "\nFUNCIONES DE CADENAS:\n";
echo "strlen: " . strlen($texto) . " caracteres\n"; // cuenta
echo "strtoupper: " . strtoupper($texto) . "\n";   // mayúsculas
echo "strtolower: " . strtolower($texto) . "\n";   // minúsculas
echo "str_replace: " . str_replace("Mundo", "Leonel", $texto) . "\n"; // reemplazar
print_r(explode(" ", $texto)); // dividir en array

// 3.2 Funciones de números
echo "\nFUNCIONES DE NÚMEROS:\n";
echo "abs(-5) = " . abs(-5) . "\n";
echo "round(3.6) = " . round(3.6) . "\n";
echo "rand(1,10) = " . rand(1,10) . "\n";
echo "max(1,5,10) = " . max(1,5,10) . "\n";
echo "min(1,5,10) = " . min(1,5,10) . "\n";

// 3.3 Funciones de arrays
echo "\nFUNCIONES DE ARRAYS:\n";
$frutas = ["manzana", "pera", "banano"];
echo "count: " . count($frutas) . "\n";
array_push($frutas, "uva");
print_r($frutas);
array_pop($frutas);
print_r($frutas);
sort($frutas);
print_r($frutas);

// 3.4 Funciones de depuración
echo "\nFUNCIONES DE DEPURACIÓN:\n";
$miArray = [1, 2, 3, "PHP"];
print_r($miArray);
var_dump($miArray); // más detalle



?>
    </pre>
</body>
</html>
