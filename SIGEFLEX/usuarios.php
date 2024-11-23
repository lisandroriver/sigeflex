<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-success link">
    <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-success">Listado Usuarios</a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-success" href="home.php">Salir</a>
</li>
</ul>         
</div>  
            </nav>
    </header>
    <div class="container mt-2">
            <div class="col bg-success p-1">
                <?php
                include 'db.php';
                    // Llamada a la función que obtiene la paginación
                    Getpaginacion($conexion);
                ?>
            </div>
        </div>
    </div>
</body>
</html>
