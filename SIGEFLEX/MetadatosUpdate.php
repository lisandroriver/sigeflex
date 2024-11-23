<?php
session_start();
include 'db.php';
$apellido=$_POST['ape'];
 $correo=$_POST['correo'];
 $contraseña=$_POST['con'];
 $nombre=$_POST['name'];
 $dni=$_POST['DNI'];
 $codigo=$_POST['telop'];
 $telefono=$_POST['tel'];
 $cargo=$_POST['car'];
 $perfil=$_POST['per'];
 $direccion=$_POST['dire'];
 $ciudad=$_POST['ciu'];
 $provincia=$_POST['pro'];

$query="UPDATE loginn SET usuario='$correo', contraseña='$contraseña', Nombre='$nombre', 
Apellido='$apellido', DNI='$dni', Perfil='$perfil', Cargo='$cargo', Telefono='$telefono', telop='$codigo', 
Direccion='$direccion', Ciudad='$ciudad', Provincia='$provincia' WHERE DNI='$dni'";
$result=$conexion->query($query);
if($result==1){
    header('Location:usuarios.php');
}
?>