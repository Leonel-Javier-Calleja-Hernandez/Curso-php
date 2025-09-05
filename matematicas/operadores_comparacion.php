<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERADORES DE COMPARACION</title>
</head>
<body>
<?php
/*
==================================================
   OPERADORES DE COMPARACIÓN EN PHP
   ---------------------------------
   Sirven para comparar valores y devuelven
   true (verdadero) o false (falso).
==================================================
*/

// Variables de ejemplo
$a = 5;
$b = "5";
$c = 10;

/*
--------------------------------------------------
 1. ==   (Igual en valor)
   - Compara solo los valores.
   - No importa si el tipo es diferente.
--------------------------------------------------
*/
echo "<h3>Operador ==</h3>";
var_dump($a == $b); // true → 5 y "5" tienen el mismo valor numérico

/*
--------------------------------------------------
 2. ===   (Idéntico en valor y tipo)
   - Compara tanto valor como tipo de dato.
   - Deben coincidir los dos.
--------------------------------------------------
*/
echo "<h3>Operador ===</h3>";
var_dump($a === $b); // false → 5 (int) no es idéntico a "5" (string)

/*
--------------------------------------------------
 3. != o <>   (Diferente en valor)
   - Devuelve true si los valores no son iguales.
--------------------------------------------------
*/
echo "<h3>Operador != o <></h3>";
var_dump($a != $c); // true → 5 no es igual a 10
var_dump($a <> $b); // false → 5 sí es igual a "5" en valor

/*
--------------------------------------------------
 4. !==   (No idéntico en valor o tipo)
   - Devuelve true si son distintos en tipo o valor.
--------------------------------------------------
*/
echo "<h3>Operador !==</h3>";
var_dump($a !== $b); // true → diferentes en tipo (int vs string)

/*
--------------------------------------------------
 5. >   (Mayor que)
--------------------------------------------------
*/
echo "<h3>Operador ></h3>";
var_dump($c > $a); // true → 10 es mayor que 5

/*
--------------------------------------------------
 6. <   (Menor que)
--------------------------------------------------
*/
echo "<h3>Operador <</h3>";
var_dump($a < $c); // true → 5 es menor que 10

/*
--------------------------------------------------
 7. >=   (Mayor o igual)
--------------------------------------------------
*/
echo "<h3>Operador >=</h3>";
var_dump($a >= 5); // true → 5 es igual a 5

/*
--------------------------------------------------
 8. <=   (Menor o igual)
--------------------------------------------------
*/
echo "<h3>Operador <=</h3>";
var_dump($a <= 4); // false → 5 no es menor ni igual a 4

/*
--------------------------------------------------
 9. <=>   (Nave espacial)
   - Devuelve -1 si el de la izquierda es menor
   - Devuelve  0 si son iguales
   - Devuelve  1 si el de la izquierda es mayor
   Muy usado en funciones de ordenamiento.
--------------------------------------------------
*/
echo "<h3>Operador <=> (nave espacial)</h3>";
echo "2 <=> 5 = " . (2 <=> 5) . "<br>"; // -1 → izquierda menor
echo "5 <=> 5 = " . (5 <=> 5) . "<br>"; // 0  → iguales
echo "7 <=> 5 = " . (7 <=> 5) . "<br>"; // 1  → izquierda mayor

/*
==================================================
  RESUMEN RÁPIDO:
  ==   Igual (valor)
  ===  Idéntico (valor y tipo)
  !=   Diferente en valor
  !==  No idéntico
  >    Mayor que
  <    Menor que
  >=   Mayor o igual
  <=   Menor o igual
  <=>  Nave espacial (-1, 0, 1)
==================================================
*/
?>


<?php
//Practica
$var1 = 8;
$var2 = "8";
$var3 = "leonel";

if ($var1 != $var3){
  echo "SON Diferentes";
}else{
  echo "NO SON Diferentes";
}

?>
    
</body>
</html>