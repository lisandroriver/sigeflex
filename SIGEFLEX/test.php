<?php
include 'db.php';

if ($conexion) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error en la conexión.";
}
?>
$servidor ="sql102.infinityfree.com";  // MySQL hostname
$user = "if0_37726403";                 // Usuario de la base de datos
$password = "RiverPlate91218";          // Contraseña de la base de datos
$database = "if0_37726403_datos";       // Nombre de la base de datos