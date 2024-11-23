<?php
include 'db.php';  // Conexión a la base de datos
session_start(); //mantiene la sesion abierta
$DNI=$_GET['valor'];// Verifica el parámetro 'valor'
$query = "INSERT IGNORE INTO Presentismo (DNI) VALUES ('$DNI')";//consulta a la base de datos
$result=$conexion->query($query); //ejecuta la consulta
if($result>=1){
    header('Location:usuarios.php');
}

?>

