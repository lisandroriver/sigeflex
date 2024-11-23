<?php
session_start();
echo $DNI=$_GET['valor'];
include 'db.php';
$Nombre=$_SESSION['Nombre'];
$Apellido=$_SESSION['Apellido'];
$Cargo=$_SESSION['Cargo'];
$Perfil=$_SESSION['Perfil'];
$DN=$_SESSION['DNI'];
$query="DELETE FROM loginn WHERE DNI='$DNI'";
$result=$conexion->query($query);
if($result==1){
    header('Location:usuarios.php');
}
?>
