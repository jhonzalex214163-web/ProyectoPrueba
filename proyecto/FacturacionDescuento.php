<?php

echo "Ingrese el nombre del cliente: ";
$nombre = trim(fgets(STDIN));

echo "Ingrese el valor de la compra: ";
$compra = (float) trim(fgets(STDIN)); // ← ESTA ES LA VARIABLE CLAVE

if ($compra > 200000) {
    $descuento = $compra * 0.10;
} else {
    $descuento = 0;
}

$total = $compra - $descuento;

echo "Nombre del cliente: $nombre\n";
echo "Valor de la compra: $compra\n";
echo "Descuento: $descuento\n";
echo "Total a pagar: $total\n";

?>