<?php
session_start();
include("db.php");

$usuario=$_POST['user'];
$contraseña=$_POST['contra'];

 $consulta="SELECT * FROM loginn WHERE usuario='$usuario' AND contraseña='$contraseña'";
 $resultado= mysqli_query ($conexion,$consulta);
 while ($row=mysqli_fetch_array($resultado)){
    $password_db=$row['contraseña'];
    $usuario_db=$row['usuario'];
 }
if($usuario==$usuario_db && $contraseña==$password_db) {
    
    header('Location:home.php');
}
else{
    header('Location:index.php');
}
?>