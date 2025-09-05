<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
  include → archivo opcional (warning si no está).
  
  require → archivo obligatorio (fatal error si no está).
  
  Flujo → es el orden en que PHP lee y ejecuta tu código,
           normalmente de arriba hacia abajo,
           a menos que lo cambies con condicionales, 
           bucles, funciones o includes.
*/
?>

<?php

    echo "Este es el primer mensaje <br>";

    echo "Este es la segunda mensaje";

    function dameDatos(){
        echo "Estamos dentro de la funcion" ;
    }

    dameDatos();

?>
    
</body>
</html>