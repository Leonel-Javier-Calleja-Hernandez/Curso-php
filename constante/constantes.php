<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include "practica_constantes";

// ======================
// Constantes mágicas en PHP
// ======================

// __LINE__ → Número de la línea actual
echo "Estoy en la línea: " . __LINE__ . "\n";

// __FILE__ → Ruta y nombre del archivo
echo "Este archivo se llama: " . __FILE__ . "\n";

// __DIR__ → Carpeta donde está el archivo
echo "Está guardado en la carpeta: " . __DIR__ . "\n";


// ======================
// Ejemplo con funciones
// ======================
function saludar() {
    // __FUNCTION__ → Nombre de la función actual
    echo "Estoy dentro de la función: " . __FUNCTION__ . "\n";
}

saludar();


// ======================
// Ejemplo con clases
// ======================
class Persona {
    public function mostrarInfo() {
        // __CLASS__ → Nombre de la clase
        echo "Clase: " . __CLASS__ . "\n";
        
        // __METHOD__ → Nombre del método dentro de la clase
        echo "Método: " . __METHOD__ . "\n";
    }
}

$p = new Persona();
$p->mostrarInfo();


?>
    
</body>
</html>