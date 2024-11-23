<?php 
include 'db.php';//incluye a la base de datos
session_start();//mantiene la sesion
$query = "SELECT l.Nombre, l.Apellido, l.DNI, l.Cargo, l.Perfil  FROM Presentismo p
INNER JOIN loginn l ON p.DNI=l.DNI ";//consulta la base de datos
$result=$conexion->query($query);//ejecuta la consulta
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- responsive-->
    <title>Listado de Usuarios Presentes</title> <!-- titulo de la pagina -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity= 
    "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><!-- incluye a bootstrap-->
</head>
<body class="bg-success"> <!-- color de la pagina -->
    <header> <!-- encabezado -->
    <nav class="navbar navbar-expand-md navbar-light bg-light"> <!-- crea un menu utlizando estilos de bootstrap-->
                <div class="container-fluid ">
                    <a class="navbar-brand text-success">Usuarios Presentes</a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-success" href="home.php">Salir</a>          
</li>
</ul>         
</div>  
            </nav>
    </header>
    <div class="container mt-5 table-responsive">
        <table class="table table-striped table-hover bg-light"> <!-- crea una tabla -->
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Cargo</th>
                    <th>Perfil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows>0){
    while ($row = $result->fetch_assoc()) { // ejecuta el resultado de la consulta //
        $DNI = htmlspecialchars($row['DNI']); // establece la informaion que va a tener la tabla //
        echo "<tr>
                <td>" . htmlspecialchars($row['Nombre']) . "</td>
                <td>" . htmlspecialchars($row['Apellido']) . "</td>
                <td>" . $DNI . "</td>
                <td>" . htmlspecialchars($row['Cargo']) . "</td>
                <td>" . htmlspecialchars($row['Perfil']) . "</td>
                ";
} }
else{
echo "<tr><td colspan='6'>No hay Usuarios Presentes</td></tr>";
}
 ?>

            </tbody>
            </table>
            </div>
            </body>
            </html>