<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>

<p>&nbsp;</p>
    <form name ="form1" method="post" action="">
        <p>
            <label for="num1">NUMERO 1</label>
            <input type="text" name="num1" id="num1">

            <label for="num2">NUMERO 2</label>
            <input type="text" name="num2" id="num2">

            <label for="operacion">OPERACION : </label>
            <select name="operacion" id="operacion">
                <option value="sumar">Sumar</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicacion</option>
                <option value="divicion">Dividir</option>
                <option value="modulo">Modulo</option>
            </select>

        </p>
        <p>
            <input type="submit" name="button" id="button" value="enviar" onclick="prueva">
        </p>




    </form>
<p>&nbsp;</p>

<?php

if (isset($_POST["button"])){
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

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

?>
    
</body>
</html>