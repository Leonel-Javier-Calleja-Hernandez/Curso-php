<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    .resaltar{
        color: #f00; 
        font-weight: bold;
    }
     .resaltar2{
        color: rgba(0, 255, 64, 1); 
        font-weight: bold;
    }
</style>
<body>
    
<?php

echo "<p class='resaltar'>Este es un ejemplo de frase</p> <br>";
echo "<p class=\"resaltar2\">Ejemplo con \ y la comilla doble  </p>";

//Ejercicio 1
$variable1 ="pelota";

$variable2 ="PELOTA";

$resultado = strcmp($variable1,$variable2);

if($resultado){
    $ms =  "No coinciden";
  

}else{
    $ms = "Coinciden";
}
echo "El resultado es = $ms <br>"; 


//Ejercicio 2
$v1 = "Casa";
$v2 = "CASA";

$comparar = strcasecmp($v1,$v2); //1 si no son IGUALES y 0 si NO son IGUALES, SIN IMPORTAR SI ESTA EN MAYUSCULA O MINUSCULA SOLO EL TEXTO

echo "RESULTAD 2 ";

if($comparar){
    echo " NO SON IGUALES ";
}else{
    echo " IGUALES ";
}

?>
</body>
</html>