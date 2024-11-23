<?php
include 'db.php'; //establece conexion con la base de datos
session_start(); //inicia la sesion
$Busqueda=$_POST["Busqueda"]; //llama al valor 'Busqueda' del name de la caja

$consulta="SELECT * FROM loginn WHERE (CONCAT(Apellido, ' ', Nombre) like '%".$Busqueda."%'
 or CONCAT(Nombre, ' ', Apellido) like '%".$Busqueda."%' or
 Telefono like '%".$Busqueda."%' or 
 DNI LIKE '%".$Busqueda."%' or 
 Cargo LIKE '%".$Busqueda."%' or 
 Perfil LIKE '%".$Busqueda."%')order 
 by Apellido"; //Realiza consulta a la tabla mediante el operador Like

 $result=$conexion->query($consulta);//ejecuta la consulta
?>
<!Doctype html>
<html lang="es-ES">
    <head>
        <title>Search</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-escale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity=
    "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container-fluid ">
                    <a class="navbar-brand text-success">Resultados</a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-success" href="home.php">Salir</a>
</li>
</ul>         
</div>  
            </nav>
        </header>
    <body class="bg-success">
    <div class="container table-responsive mt-3">
<table class="table table-striped table-hover bg-light">
    <thead>
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>DNI</th>
            <th>CARGO</th>
             <th>PERFIL</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($result && $result->num_rows > 0){
    while($row=$result->fetch_assoc()){//ejecuta el resultado de la consulta
    
        ?>
        <tr>
        <td><?php echo $row['Nombre']?></td>
        <td><?php echo $row['Apellido']?></td>
        <td><?php echo $DNI=$row['DNI']?></td>
        <td><?php echo $row['Cargo']?></td>
        <td><?php echo $row['Perfil']?></td>
        <td><a href="<?php echo "verdetalleuser.php ?valor=$DNI";?>">
            <img src="lupa.png" height="25px" border="0"/></a>
                <a href=" <?php echo "ModificarUser.php ?valor=$DNI";?>" class="btn btn-warning">Editar</a>
             <a href="<?php echo "ConfirmarEliminar.php ?valor=$DNI";?>" class="btn btn-danger">Eliminar</td>
        <?php
 }
}
else{
    ?>
    <td colspan="6" class="text-center">No se encontraron resultados.</td>
<?php
}
 ?>
    </body>
</html>