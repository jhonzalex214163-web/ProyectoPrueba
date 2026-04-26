<?php

$nombreprod = readline("ingrese el nombre del producto");
$cantidadprod = (float) readline("ingrese la cantida del producto");
$precioprod = (float) readline("ingrese el precio del producto");

$total = $cantidadprod * $precioprod;

echo "el total a pagar por $cantidadprod $nombreprod es de: $total";

?>