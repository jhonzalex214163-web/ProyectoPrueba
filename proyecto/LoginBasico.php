<?php

echo " Ingrese el usuario: ";
$usuario = trim(fgets(STDIN));

echo " Ingrese el password: ";
$password = trim(fgets(STDIN));

if  ($usuario === "admin" && $password === "1234") {
    echo "Acceso concedido\n";
} else {
    echo "Acceso denegado\n";
}
?>