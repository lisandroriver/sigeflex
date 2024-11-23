<?php
include 'db.php'; //enlaza a la base de datos
session_start(); //inicia sesión
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <title>Nuevo Usuario</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-success">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container-fluid ">
                    <a class="navbar-brand text-success">Datos Personales</a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-success" href="home.php">Salir</a>
                        </li>
                    </ul>         
                </div>  
            </nav>
        </header>
        <div class="container">
        <div class="bg-success"><!-- establece el color del body -->
        <div class="row mt-5 text-light mx-auto"><!-- establece un margen y color de texto -->
        <div class="col-6"><!--  establece tamaño de la caja de texto   -->
            <form class="col-10 mx-auto" method="POST" action="MetadatosAltaUser.php">
                <label for="name" class="form-label">Correo Eléctronico</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-label="direccion" name="correo" required>
                </div>
                <label for="name" class="form-label">Contraseña</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-label="direccion" name="pass" required>
                </div>
                <label for="name" class="form-label">Nombre</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-label="direccion" name="Name" required>
                </div>
                <label for="surname" class="form-label">Apellido</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-label="direccion" name="Surname" required>
                </div>
                <label for="dni" class="form-label">DNI</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-label="direccion" name="DNI" required>
                </div>
                <label for="phone" class="form-label">Teléfono</label>
                <div class="input-group flex-nowrap">
                    <select class="input me-1 bg-light" name="telop">
                         <option>+54</option>
                         <option>+57</option>
                         <option>+51</option>
                         <option>+56</option>
                         <option>+58</option>
                         <option>+591</option>
                         <option>+55</option>
                    </select>
                    <input type="text" class="form-control" aria-label="telefono" name="Tel" required>
                </div>
            </div>
            <div class="col-5">
                <label for="cargo" class="form-label">Cargo</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-label="direccion" name="Cargo" required>
                </div>
                <label for="perfil" class="form-label">Perfil</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-label="direccion" name="Perfil" required>
                </div>
                <label for="andress" class="form-label">Dirección</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-label="direccion" name="Andress" required>
                </div>
                <label for="city" class="form-label">Ciudad</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-label="ciudad" name="City" required>
                </div>
                <label for="state" class="form-label">Provincia/Estado</label>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control"aria-label="estado" name="State" required>
                </div>                
                <div class="mt-4">
                    <button class="btn btn-outline-light text-dark" type="submit" aria-label="user" value="User">Enviar usuario</button>
                </div>
            </form>
        </div>

    </body>
</html>
