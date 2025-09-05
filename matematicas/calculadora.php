<?php

// Definición de la función 'calcular'
function calcular($numero1, $numero2, $operacion){

    if (!strcmp("sumar", $operacion)){
        echo "El resultado es " . ($numero1 + $numero2);

    } elseif (!strcmp("resta", $operacion)){
        echo "El resultado es " . ($numero1 - $numero2);

    } elseif (!strcmp("multiplicacion", $operacion)){
        echo "El resultado es " . ($numero1 * $numero2);

    } elseif (!strcmp("division", $operacion)){
        if ($numero2 != 0) {
            echo "El resultado es " . ($numero1 / $numero2);
        } else {
            echo "Error: no se puede dividir entre 0";
        }

    } elseif (!strcmp("modulo", $operacion)){
        if ($numero2 != 0) {
            echo "El resultado es " . ($numero1 % $numero2);
        } else {
            echo "Error: no se puede calcular módulo con divisor 0";
        }
    }
}

// Verificamos si el formulario fue enviado (si se presionó el botón)
if (isset($_POST["button"])){

    // Guardamos en variables los valores que vienen desde el formulario HTML
    $numero1 = $_POST["num1"];      // Primer número
    $numero2 = $_POST["num2"];      // Segundo número
    $operacion = $_POST["operacion"]; // Tipo de operación seleccionada

    // Llamamos a la función 'calcular' y le pasamos las variables como argumentos
    calcular($numero1, $numero2, $operacion);
}
?>
