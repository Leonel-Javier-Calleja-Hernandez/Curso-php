<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $palabra = "leonel";

    echo (strtoupper($palabra));

    $n1 = 1;
    $n2 = 2;

    echo sumar($n1,$n2);  

    function sumar($n1 , $n2){
        return $n1 + $n2;
    }

    

    ?>

    
</body>
</html>