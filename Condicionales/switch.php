<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$edad = 18;

switch ($edad){
    case $edad >= 18:
        echo "Mayor de edad";
    case $edad < 18:
        echo "Menor de edad";
        
}
?>
    
</body>
</html>