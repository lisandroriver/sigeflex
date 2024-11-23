<?php
include 'db.php';//establece conexion con la base de datos
session_start(); //mantiene la sesion abierta
$DNI=$_GET['valor'];//obtiene el valor de la variable valor
($query= "SELECT * FROM loginn WHERE DNI=$DNI");//realiza una consulta a la tabla
$result=$conexion->query($query);//ejecuta la consulta
?>
<!Doctype html>
<html lang="es-ES">
    <head>
        <title>Detalles Usuarios</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity=
    "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-success">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container-fluid ">
                    <a class="navbar-brand text-success">Información</a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-success" href="usuarios.php">Salir</a>
                            
</li>
</ul>         
</div>  
            </nav>
        </header>
        
        <div class="container">
        <div class="row mt-5">
            <div class="bg-success">
                <?php
    while($row=$result->fetch_assoc()){//ejecuta los resultados
        ?>
    <div class="row mt-3 text-light "><!-- establece un margen y color de texto        -->
    <div class="col-6"><!--  establece tamaño de la caja de texto   -->
        <label for="name" class="form-label">Nombre</label><!-- titulo de la caja -->
        <div class="input-group flex-nowrap"><!-- agrupa las cajas -->
  <input type="text" class="form-control" placeholder="<?php echo $row['Nombre'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon11" readonly/><!-- caja de texto -->
    </div>
   <label for="dni" class="form-label">DNI</label>
<div class="input-group flex-nowrap">
  <input type="text" class="form-control" placeholder="<?php echo $row['DNI'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon14" readonly/>
    </div>
    <label for="phone" class="form-label">Teléfono</label>
    <div class="input-group flex-nowrap">
    <div class="input-group-text bg-light" id="basic-addon1">+<?php echo $row['telop'] ;?></div>
    
  <input type="text" class="form-control" placeholder="<?php echo $row['Telefono'] ;?>" 
  aria-label="telefono" aria-describedby="basic-addon1" readonly/>
    </div>
    </div>
    <div class="col-6">
    <label for="andress" class="form-label">Dirección</label>
<div class="input-group flex-nowrap">
  <input type="text" class="form-control" placeholder="<?php echo $row['Direccion'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon2" readonly/>
    </div>
<label for="city" class="form-label">Ciudad</label>
<div class="input-group flex-nowrap">
  <input type="text" class="form-control" placeholder="<?php echo $row['Ciudad'] ;?>"
   aria-label="Recipient's username" aria-describedby="basic-addon3" readonly/>
    </div>
<label for="estate" class="form-label">Provincia/Estado</label>
<div class="input-group flex-nowrap">
  <input type="text" class="form-control" placeholder="<?php echo $row['Provincia'] ;?>"
   aria-label="estado" aria-describedby="basic-adon4" readonly/>
    </div>
   
            <?php
    }
    ?>
            </div>
            
        </div>
        
    </body>
</html>