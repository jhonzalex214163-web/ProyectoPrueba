<?php

echo "Ingrese la primera nota: ";
$nota1 = (float) trim(fgets(STDIN));

echo "Ingrese la segunda nota: ";
$nota2 = (float) trim(fgets(STDIN));

echo "Ingrese la tercera nota: ";
$nota3 = (float) trim(fgets(STDIN));

$promedio = ($nota1 + $nota2 + $nota3) / 3;
$promedio_limpio = round($promedio, 2);

echo "El promedio es: " . $promedio_limpio . "\n";

?>