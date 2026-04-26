<?php

echo "===== SISTEMA EMPRESARIAL =====\n";
echo "1. Calcular salario\n";
echo "2. Calcular promedio\n";
echo "3. Salir\n";

echo "Seleccione una opción: ";
$opcion = trim(fgets(STDIN));

switch ($opcion) {

    case 1:
        // SALARIO
        echo "Ingrese horas trabajadas: ";
        $horas = (float) trim(fgets(STDIN));

        echo "Ingrese valor por hora: ";
        $valorhora = (float) trim(fgets(STDIN));

        if ($horas < 0 || $valorhora < 0) {
            echo "Error: no se permiten valores negativos\n";
        } else {
            $salario = $horas * $valorhora;
            echo "El salario es: $salario\n";
        }
        break;

    case 2:
        // PROMEDIO
        echo "Ingrese nota 1: ";
        $n1 = (float) trim(fgets(STDIN));

        echo "Ingrese nota 2: ";
        $n2 = (float) trim(fgets(STDIN));

        echo "Ingrese nota 3: ";
        $n3 = (float) trim(fgets(STDIN));

        if ($n1 < 0 || $n2 < 0 || $n3 < 0) {
            echo "Error: notas inválidas\n";
        } else {
            $promedio = ($n1 + $n2 + $n3) / 3;
            echo "El promedio es: $promedio\n";
        }
        break;

    case 3:
        echo "Saliendo del sistema...\n";
        break;

    default:
        echo "Opción inválida\n";
        break;
}

?>