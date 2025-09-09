<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplos de Casting en PHP</title>
</head>
<body>
    <h1>Ejemplos de Casting en PHP</h1>

    <?php
    // Variable original (string)
    $texto = "123.45";

    // 1. (int) Casting a ENTERO
    $entero = (int)$texto; 
    echo "<p><b>(int)</b> Convierte a entero → $entero</p>";
    // Resultado: 123 (quita los decimales y convierte a número entero)

    // 2. (float) Casting a DECIMAL
    $decimal = (float)$texto; 
    echo "<p><b>(float)</b> Convierte a decimal → $decimal</p>";
    // Resultado: 123.45 (lo interpreta como número con decimales)

    // 3. (string) Casting a CADENA
    $cadena = (string)123.45; 
    echo "<p><b>(string)</b> Convierte a texto → $cadena</p>";
    // Resultado: "123.45" (ahora es texto, no número)

    // 4. (bool) Casting a BOOLEANO
    $booleano1 = (bool)$texto; 
    $booleano2 = (bool)0; 
    echo "<p><b>(bool)</b> Texto '123.45' → $booleano1</p>";
    echo "<p><b>(bool)</b> Número 0 → $booleano2</p>";
    // Resultado: cualquier valor distinto de 0 o vacío es TRUE (1).
    // El 0 o "" (vacío) es FALSE (0).

    // 5. (array) Casting a ARREGLO
    $arreglo = (array)$texto;
    echo "<p><b>(array)</b> Convierte a arreglo → ";
    print_r($arreglo);
    echo "</p>";
    // Resultado: Array con un solo elemento [0] => "123.45"

    // 6. (object) Casting a OBJETO
    $objeto = (object)$texto;
    echo "<p><b>(object)</b> Convierte a objeto → ";
    var_dump($objeto);
    echo "</p>";
    // Resultado: Objeto con propiedad "scalar" => "123.45"

    
    ?>
</body>
</html>
