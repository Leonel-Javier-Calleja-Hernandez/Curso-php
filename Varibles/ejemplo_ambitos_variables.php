<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    
$nombre = "Leonel";

function dameNombre(){
    global $nombre; // variable global
    $nombre = "EL nombre es " . $nombre; // variable local


}
dameNombre();
echo $nombre;



?>
</body>
</html>