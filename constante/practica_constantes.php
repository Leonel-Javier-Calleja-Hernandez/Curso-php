
<?php
namespace MiAplicacion; 


class Demo {
    public function verNamespace() {
        echo "Namespace actual: " . __NAMESPACE__ . "\n";
    }
}

$d = new Demo();
$d->verNamespace();


echo "PRACTICA CONSTANTES"
?>