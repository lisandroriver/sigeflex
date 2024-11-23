<?php
include 'db.php';
session_start();
($query= "SELECT * FROM loginn");//realiza una consulta a la tabla
$result=$conexion->query($query);//ejecuta la consulta

menu();

?>
</body>
</html>