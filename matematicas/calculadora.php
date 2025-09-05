<?php

if (isset($_POST["button"])){
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    calcular($numero1, $numero2, $operacion);


function calcular($numero1, $numero2, $operacion){
//El ! está ahí para invertir el resultado lógico, porque strcmp devuelve 0 cuando las cadenas son iguales, y 0 significa falso en PHP.
//Con el !, ese 0 se vuelve verdadero, y así el if funciona como se espera. ✅
    if (!strcmp("sumar", $operacion)){
        echo "el resultado es " . ($numero1 + $numero2);
    }elseif(!strcmp("resta", $operacion)){
        echo "el resultado es " . ($numero1 - $numero2);
    }elseif(!strcmp("multiplicacion", $operacion)){
        echo "el resultado es " . ($numero1 * $numero2);
    }elseif(!strcmp("divicion", $operacion)){
        echo "el resultado es " . ($numero1 / $numero2);
    }elseif(!strcmp("modulo", $operacion)){
        echo "el resultado es " . ($numero1 % $numero2);
    }
}

}

?>