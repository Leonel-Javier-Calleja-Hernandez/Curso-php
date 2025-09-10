<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i = 0; $i <= 10; $i++){
            echo "<p> Hermos ingresado al bucle";
        }

        for ($i = 2; $i <= 20; $i++)
            if ($i % 2 == 0){
                echo "<p> $i";
            }
                
        for ($i = 0; $i <= 10; $i++){
           if ($i == 0) {
                echo "<p> Todo numero multiplicado por 0 da 0";
                continue;
           }
            echo "<p>9 x $i = " . $i * 9;
        }
        echo "------------fin del bucle";

        for ($i = 10;$i >= -10; --$i){
            if($i == 0){
                echo "<P>NO SE PUEDE DIVIDIR ENTRE CERO";
            }else{
                echo "<p>9 / $i = " . 9 / $i;
            }
             
        }
    ?>
</body>
</html>