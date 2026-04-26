<?php

echo "Ingrese el valor inicial del inventario: ";
$stockInicial = (int) trim(fgets(STDIN));

echo "Ingrese la cantidad vendida: ";
$cantidadVendida = (int) trim(fgets(STDIN));

$stockFinal = $stockInicial - $cantidadVendida;

echo "El stock final es: " . $stockFinal . "\n";

?>