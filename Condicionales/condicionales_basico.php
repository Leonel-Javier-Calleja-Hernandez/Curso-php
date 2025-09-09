<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estructura de Condicionales en PHP - Ejemplos Comentados</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.5; }
        h1, h2 { text-align: center; }
        pre { background:#f4f4f4; padding:10px; border:1px solid #ddd; overflow:auto; }
        .example { background:#fff; border:1px solid #ddd; padding:10px; margin-bottom:16px; }
        .note { color:#555; font-size:0.95em; margin-bottom:8px; }
    </style>
</head>
<body>
    <h1>Condicionales en PHP - Estructura y Qué Son (comentado)</h1>

    <p class="note">Este archivo muestra las estructuras condicionales más comunes en PHP: <b>if</b>, <b>if...else</b>, <b>if...elseif...else</b>, <b>switch</b>, operador ternario, y ejemplos con operadores lógicos. Cada bloque tiene comentarios en español.</p>

    <h2>1) if</h2>
    <div class="example">
        <p class="note"><b>¿Qué es?</b> Ejecuta un bloque de código sólo si la condición es verdadera.</p>
        <pre><code>&lt;?php
// Ejemplo: si $edad es mayor o igual a 18, muestra "Mayor de edad"
$edad = 20;

if ($edad >= 18) {
    // Este bloque se ejecuta sólo cuando la condición ($edad >= 18) es true
    echo "Eres mayor de edad";
}
?&gt;</code></pre>
    </div>

    <h2>2) if...else</h2>
    <div class="example">
        <p class="note"><b>¿Qué es?</b> Si la condición es true ejecuta el primer bloque; si es false ejecuta el bloque del else.</p>
        <pre><code>&lt;?php
$edad = 15;

if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    // Si no se cumple la condición anterior, se ejecuta este bloque
    echo "Eres menor de edad";
}
?&gt;</code></pre>
    </div>

    <h2>3) if...elseif...else</h2>
    <div class="example">
        <p class="note"><b>¿Qué es?</b> Permite comprobar varias condiciones en orden; la primera verdadera se ejecuta.</p>
        <pre><code>&lt;?php
$nota = 75;

if ($nota >= 90) {
    echo "Excelente";
} elseif ($nota >= 60) {
    // Se llega aquí si la primera condición fue false y esta es true
    echo "Aprobado";
} else {
    // Si ninguna condición anterior es true, se ejecuta esto
    echo "Reprobado";
}
?&gt;</code></pre>
    </div>

    <h2>4) switch</h2>
    <div class="example">
        <p class="note"><b>¿Qué es?</b> Estructura para comparar una variable con múltiples valores (casos). Más legible cuando hay muchas opciones.</p>
        <pre><code>&lt;?php
$dia = "Martes";

switch ($dia) {
    case "Lunes":
        echo "Inicio de semana";
        break; // break evita que siga ejecutando los siguientes casos
    case "Martes":
        echo "Hoy es Martes";
        break;
    case "Viernes":
        echo "Fin de semana cerca";
        break;
    default:
        // Si no coincide con ningún case, se ejecuta default
        echo "Día normal";
}
?&gt;</code></pre>
    </div>

    <h2>5) Operador ternario (corto)</h2>
    <div class="example">
        <p class="note"><b>¿Qué es?</b> Una forma compacta de if...else que devuelve un valor. <code>condición ? valorSiTrue : valorSiFalse</code></p>
        <pre><code>&lt;?php
$edad = 18;
$mensaje = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
echo $mensaje;
?&gt;</code></pre>
    </div>

    <h2>6) Negación lógica (!) y ejemplos combinados</h2>
    <div class="example">
        <p class="note"><b>¿Qué es ! (NOT)?</b> Niega una condición: si la condición es true, !la convierte en false, y viceversa.</p>
        <pre><code>&lt;?php
$activo = false;

if (!$activo) { // equivale a: if ($activo == false)
    echo "El usuario no está activo";
}
?&gt;</code></pre>
    </div>

    <h2>7) Operadores lógicos en condicionales (AND / OR)</h2>
    <div class="example">
        <p class="note">Usar operadores lógicos para combinar condiciones: <b>AND</b> => ambas deben ser true; <b>OR</b> => basta una true.</p>

        <pre><code>&lt;?php
$a = 10;
$b = 5;

// && (AND lógico) -> true sólo si ambas condiciones son true
if ($a > 5 && $b < 10) {
    echo "Ambas condiciones son verdaderas (&&)";
}

// || (OR lógico) -> true si al menos una condición es true
if ($a < 5 || $b < 10) {
    echo "Al menos una condición es verdadera (||)";
}

// Cuidado con "and" y "or": existen pero tienen menor prioridad que "="
// Ejemplo que confunde:
$resultado1 = true && false; // aqui && se evalúa antes de la asignación -> $resultado1 = (true && false) => false
$resultado2 = true and false; // aquí = tiene mayor prioridad que and -> ($resultado2 = true) and false -> $resultado2 queda true

echo " resultado1 = " . ($resultado1 ? "true" : "false");
echo " resultado2 = " . ($resultado2 ? "true" : "false");
?&gt;</code></pre>
    </div>

    <h2>8) Ejemplo práctico completo</h2>
    <div class="example">
        <p class="note">Un solo script que usa distintos condicionales y muestra resultados.</p>
        <pre><code>&lt;?php
// Simulación de datos (puedes cambiarlos y recargar la página)
$usuario = "Ana";
$edad = 17;
$tienePermiso = true;

// if / else
if ($edad >= 18) {
    echo "Bienvenido $usuario: Eres mayor de edad.&lt;br&gt;";
} else {
    echo "Lo siento $usuario: Eres menor de edad.&lt;br&gt;";
}

// if...elseif...else
if ($edad >= 65) {
    echo "Jubilado.&lt;br&gt;";
} elseif ($edad >= 18) {
    echo "Adulto.&lt;br&gt;";
} else {
    echo "Joven.&lt;br&gt;";
}

// Combinando condiciones con &&
if ($edad >= 18 && $tienePermiso) {
    echo "Puedes entrar (edad y permiso).&lt;br&gt;";
} else {
    echo "No puedes entrar (falta edad o permiso).&lt;br&gt;";
}

// Operador ternario
echo ($tienePermiso) ? "Tiene permiso." : "No tiene permiso.";
?&gt;</code></pre>
    </div>

    <h2>Resumen rápido (para anotar)</h2>
    <ul>
        <li><b>if</b>: ejecuta cuando la condición es verdadera.</li>
        <li><b>if...else</b>: añade una alternativa cuando la condición es falsa.</li>
        <li><b>if...elseif...else</b>: comprueba varias condiciones en orden.</li>
        <li><b>switch</b>: buena opción cuando comparas la misma variable con muchos valores.</li>
        <li><b>?: (ternario)</b>: atajo de if...else para devolver un valor.</li>
        <li><b>&& / ||</b>: operadores lógicos con prioridad alta; usar preferiblemente frente a <b>and / or</b>.</li>
        <li><b>!</b>: niega una condición.</li>
    </ul>

    <p class="note">Guarda este archivo como <code>condiciones.php</code> y ejecútalo en tu servidor local (XAMPP, Laragon, etc.) para probar cada bloque. Si quieres, te preparo una versión con formulario interactivo para probar tus propias condiciones.</p>
</body>
</html>
