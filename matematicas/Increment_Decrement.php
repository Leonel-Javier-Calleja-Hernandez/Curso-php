<?php
if (isset($_POST["button"])){
    $numero1 = $_POST["num1"];

    $operacion = $_POST["operacion"];


 if (!strcmp("incremento", $operacion)){
        
        $numero1++;
        echo "Resultado es:" . $numero1;
    }elseif(!strcmp("decremento", $operacion)){
        
        $numero1--;
        echo "Resultado es:" . $numero1;
    }

    }
?>