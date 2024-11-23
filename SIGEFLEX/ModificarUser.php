<?php
session_start();
include 'db.php';
$DNI=$_GET['valor'];
($query= "SELECT * FROM loginn WHERE DNI=$DNI");//realiza una consulta a la tabla
$result=$conexion->query($query);//ejecuta la consulta
?>
<!Doctype html>
<html lang="es-ES">
    <head>
        <title>Editar Usuarios</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity=
    "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-success">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-success">Modificar Usuarios</a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-success" href="usuarios.php">Salir</a>
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
    <form class="col-10" method="POST" action="MetadatosUpdate.php"><!--form para conectar las cajas con 'MetadatosUpdate'-->
    <label for="correo" class="form-label">Correo Eléctronico</label><!-- titulo de la caja -->
        <div class="input-group flex-nowrap"><!-- agrupa las cajas -->
  <input type="text" class="form-control" name="correo" value="<?php echo $row['usuario'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon1"/><!-- caja de texto -->
    </div>
    <label for="correo" class="form-label">Contraseña</label><!-- titulo de la caja -->
    <div class="input-group flex-nowrap"><!-- agrupa las cajas -->
    <input type="text" class="form-control" name="con" value="<?php echo $row['contraseña'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon2"/><!-- caja de texto -->
    </div>
        <label for="name" class="form-label">Nombre</label><!-- titulo de la caja -->
        <div class="input-group flex-nowrap"><!-- agrupa las cajas -->
  <input type="text" class="form-control" name="name" value="<?php echo $row['Nombre'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon3"/><!-- caja de texto -->
    </div>
    <label for="correo" class="form-label">Apellido</label><!-- titulo de la caja -->
    <div class="input-group flex-nowrap"><!-- agrupa las cajas -->
    <input type="text" class="form-control" name="ape" value="<?php echo $row['Apellido'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon4"/><!-- caja de texto -->
    </div>
   <label for="dni" class="form-label">DNI</label>
<div class="input-group flex-nowrap">
  <input type="text" class="form-control" name="DNI" value="<?php echo $row['DNI'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon5"/>
    </div>
    <label for="phone" class="form-label">Teléfono</label>
    <div class="input-group flex-nowrap">
    <select class="input me-1  bg-light" name="telop"><!-- select para seleccionar entre opciones-->
     <option value="<?php echo $row['telop']; ?>" selected>+<?php echo $row['telop'] ;?></option>
               <!-- Generar las demás opciones dinámicamente, excluyendo la seleccionada -->
        <?php
        $opciones = ["54", "57", "51", "56", "58", "591", "55"];
        foreach ($opciones as $opcion) {
            if ($opcion != $row['telop']) { // Excluir la opción ya seleccionada
                echo "<option value='$opcion'>+$opcion</option>";
            }
        }
        ?>
        </select>
    <input type="text" class="form-control" name="tel" value="<?php echo $row['Telefono'] ;?>"
  aria-label="telefono" aria-describedby="basic-addon6"/>
    </div>
    </div>
    <div class="col-6">
    <label for="correo" class="form-label">Cargo</label><!-- titulo de la caja -->
    <div class="input-group flex-nowrap"><!-- agrupa las cajas -->
    <input type="text" class="form-control" name="car" value="<?php echo $row['Cargo'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon7"/><!-- caja de texto -->
    </div>
    <label for="correo" class="form-label">Perfíl</label><!-- titulo de la caja -->
    <div class="input-group flex-nowrap"><!-- agrupa las cajas -->
    <input type="text" class="form-control" name="per" value="<?php echo $row['Perfil'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon8"/><!-- caja de texto -->
    </div>
    <label for="andress" class="form-label">Dirección</label>
<div class="input-group flex-nowrap">
  <input type="text" class="form-control" name="dire" value="<?php echo $row['Direccion'] ;?>"
   aria-label="direccion" aria-describedby="basic-addon9"/>
    </div>
<label for="city" class="form-label">Ciudad</label>
<div class="input-group flex-nowrap">
  <input type="text" class="form-control" name="ciu" value="<?php echo $row['Ciudad'] ;?>"
   aria-label="Recipient's username" aria-describedby="basic-addon10"/>
    </div>
<label for="estate" class="form-label">Provincia/Estado</label>
<div class="input-group flex-nowrap">
  <input type="text" class="form-control"name="pro" value="<?php echo $row['Provincia'] ;?>"
   aria-label="estado" aria-describedby="basic-adon11"/>
    </div>
    <div class="mt-4"><!--establece un margen-->
      <button class="btn btn-outline-light text-dark" type="submit" aria-label="user" value="User">Enviar usuario
      </button><!-- boton de tipo submit para enviar la informacion-->
      </div>
</form>
<?php } ?>
            </div>
            
        </div>
        
    </body>
</html>