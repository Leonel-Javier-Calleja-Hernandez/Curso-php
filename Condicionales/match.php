<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparación Switch vs Match en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f5f5f5;
            color: #333;
        }
        h1, h2 {
            color: #005f73;
        }
        pre {
            background-color: #e0e0e0;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        .example {
            border-left: 5px solid #0a9396;
            padding-left: 10px;
            margin-bottom: 20px;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>PHP: Comparación entre <code>switch</code> y <code>match</code></h1>

    <p>En PHP, tanto <code>switch</code> como <code>match</code> se usan para ejecutar acciones dependiendo del valor de una variable. Sin embargo, <code>match</code> es más moderno, más seguro y más conciso.</p>

    <h2>1. Ejemplo con <code>switch</code></h2>
    <div class="example">
        <pre>
&lt;?php
$dia = "martes";

switch($dia) {
    case "lunes":
        $mensaje = "Hoy es lunes.";
        break; // necesario para que no siga con los demás casos
    case "martes":
        $mensaje = "Hoy es martes.";
        break;
    default:
        $mensaje = "Día no válido.";
}

echo $mensaje;
?&gt;
        </pre>
        <p><strong>Notas:</strong></p>
        <ul>
            <li>Se necesita <code>break</code> para evitar que se ejecuten todos los casos siguientes.</li>
            <li>La comparación es débil (<code>==</code>), puede dar resultados inesperados con distintos tipos de datos.</li>
        </ul>
    </div>

    <h2>2. Ejemplo con <code>match</code></h2>
    <div class="example">
        <pre>
&lt;?php
$dia = "martes";

$mensaje = match($dia) {
    "lunes" => "Hoy es lunes.",
    "martes" => "Hoy es martes.",
    default => "Día no válido."
};

echo $mensaje;
?&gt;
        </pre>
        <p><strong>Notas:</strong></p>
        <ul>
            <li>No necesita <code>break</code>; cada caso termina automáticamente.</li>
            <li>Comparación estricta (<code>===</code>), más segura para tipos de datos.</li>
            <li>Se puede asignar directamente a una variable porque <code>match</code> es una expresión.</li>
        </ul>
    </div>

    <h2>3. Diferencias clave</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Característica</th>
            <th>switch</th>
            <th>match</th>
        </tr>
        <tr>
            <td>Retorno de valor</td>
            <td>No retorna directamente</td>
            <td>Retorna un valor directamente</td>
        </tr>
        <tr>
            <td>Break</td>
            <td>Necesario</td>
            <td>No necesario</td>
        </tr>
        <tr>
            <td>Comparación</td>
            <td>Débil (==)</td>
            <td>Estricto (===)</td>
        </tr>
        <tr>
            <td>Sintaxis</td>
            <td>Más verbosa</td>
            <td>Compacta y legible</td>
        </tr>
    </table>

    <h2>Conclusión</h2>
    <p>Si estás usando PHP 8 o superior, <code>match</code> es preferible para asignaciones basadas en valores y comparaciones estrictas. <code>switch</code> todavía funciona, pero requiere más cuidado con <code>break</code> y tipos de datos.</p>
</body>
</html>
