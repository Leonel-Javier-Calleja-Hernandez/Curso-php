<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Funciones en PHP - Ejemplos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h1 {
            color: #1a73e8;
        }
        h2 {
            color: #0b3d91;
        }
        pre {
            background-color: #e8eaf6;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
        }
        code {
            color: #d32f2f;
            font-weight: bold;
        }
        .section {
            margin-bottom: 30px;
        }
        .example {
            background-color: #fff3e0;
            padding: 10px;
            border-left: 5px solid #ff9800;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Funciones en PHP - Ejemplos</h1>

    <!-- SECCIÓN 1 -->
    <div class="section">
        <h2>1. Funciones Definidas por el Usuario</h2>

        <div class="example">
            <strong>1.1 Función simple (sin parámetros ni retorno)</strong>
            <pre>
function saludar() {
    echo "Hola Mundo!\n";
}
saludar();
            </pre>
        </div>

        <div class="example">
            <strong>1.2 Función con parámetro</strong>
            <pre>
function saludarPersona($nombre) {
    echo "Hola, $nombre!\n";
}
saludarPersona("Leonel");
            </pre>
        </div>

        <div class="example">
            <strong>1.3 Función con retorno</strong>
            <pre>
function sumar($a, $b) {
    return $a + $b;
}
echo "5 + 3 = " . sumar(5, 3);
            </pre>
        </div>

        <div class="example">
            <strong>1.4 Función con parámetro y retorno</strong>
            <pre>
function calcularAreaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}
echo "Área de triángulo (10x5) = " . calcularAreaTriangulo(10, 5);
            </pre>
        </div>
    </div>


    <!-- SECCIÓN 3 -->
    <div class="section">
        <h2>3. Funciones Predefinidas en PHP</h2>

        <div class="example">
            <strong>3.1 Funciones de cadenas</strong>
            <pre>
$texto = "Hola Mundo PHP";
echo "strlen: " . strlen($texto) . " caracteres\n";
echo "strtoupper: " . strtoupper($texto) . "\n";
echo "strtolower: " . strtolower($texto) . "\n";
echo "str_replace: " . str_replace("Mundo", "Leonel", $texto) . "\n";
print_r(explode(" ", $texto));
            </pre>
        </div>

        <div class="example">
            <strong>3.2 Funciones de números</strong>
            <pre>
echo "abs(-5) = " . abs(-5) . "\n";
echo "round(3.6) = " . round(3.6) . "\n";
echo "rand(1,10) = " . rand(1,10) . "\n";
echo "max(1,5,10) = " . max(1,5,10) . "\n";
echo "min(1,5,10) = " . min(1,5,10) . "\n";
            </pre>
        </div>

        <div class="example">
            <strong>3.3 Funciones de arrays</strong>
            <pre>
$frutas = ["manzana", "pera", "banano"];
echo "count: " . count($frutas) . "\n";
array_push($frutas, "uva");
print_r($frutas);
array_pop($frutas);
print_r($frutas);
sort($frutas);
print_r($frutas);
            </pre>
        </div>

        <div class="example">
            <strong>3.4 Funciones de depuración</strong>
            <pre>
$miArray = [1, 2, 3, "PHP"];
print_r($miArray);
var_dump($miArray);
            </pre>
        </div>
    </div>


        <!-- SECCIÓN 2 -->
    <div class="section">
        <h2>2. Variables y Funciones</h2>

        <div class="example">
            <strong>2.1 Pasar variables como parámetros</strong>
            <pre>
$numero1 = 10;
$numero2 = 20;

function sumarDosNumeros($a, $b) {
    return $a + $b;
}
echo "Suma con parámetros: " . sumarDosNumeros($numero1, $numero2);
            </pre>
        </div>

        <div class="example">
            <strong>2.2 Usar <code>global</code> (no recomendado)</strong>
            <pre>
$nombre = "Leonel";
function mostrarNombreGlobal() {
    global $nombre;
    echo "Usando global: Hola, $nombre!\n";
}
mostrarNombreGlobal();
            </pre>
        </div>

        <div class="example">
            <strong>2.3 Usar <code>$GLOBALS</code></strong>
            <pre>
$edad = 25;
function mostrarEdad() {
    echo "Usando \$GLOBALS: Tienes " . $GLOBALS["edad"] . " años\n";
}
mostrarEdad();
            </pre>
        </div>
    </div>

</body>
</html>

