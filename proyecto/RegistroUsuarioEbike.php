<?php

echo "===== REGISTRO DE USUARIO - ECOBIKE =====\n";

// ID automático
$id_usuario = 1;

// Estado por defecto
$estado = "activo";

// Nombre
echo "Ingrese el nombre: ";
$nombre = trim(fgets(STDIN));

// Email
echo "Ingrese el email: ";
$email = trim(fgets(STDIN));

// Password
echo "Ingrese la contraseña: ";
$password = trim(fgets(STDIN));

// Teléfono
echo "Ingrese el teléfono: ";
$telefono = trim(fgets(STDIN));

// Tipo de usuario
echo "Seleccione el tipo de usuario:\n";
echo "1. Cliente\n";
echo "2. Administrador\n";
$rol_id = (int) trim(fgets(STDIN));

// VALIDACIONES

if ($nombre == "" || $email == "") {

    echo "Error: nombre y email son obligatorios\n";

} else {

    if ($rol_id != 1 && $rol_id != 2) {

        echo "Error: tipo de usuario inválido\n";

    } else {

        // Mostrar datos
        echo "----- USUARIO REGISTRADO -----\n";
        echo "ID: $id_usuario\n";
        echo "Nombre: $nombre\n";
        echo "Email: $email\n";
        echo "Teléfono: $telefono\n";
        echo "Rol: $rol_id\n";
        echo "Estado: $estado\n";
    }
}

?>