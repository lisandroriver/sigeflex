<?php
$servidor ="localhost";  // MySQL hostname
$user = "root";                 // Usuario de la base de datos
$password = "";          // Contraseña de la base de datos
$database = "datos";       // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($servidor, $user, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
function menu(){
?>
<!Doctype html>
<html lang="es-ES">
<head>
    <title>SIGEFLEX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="edit.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
    <a class="navbar-brand text-success"><img src="Preview-fotor-bg-remover-2024050919831.png" height="65px"
    >Système de Gestion Flexible</a>
    <button class="navbar-toggler" type="button"
    data-bs-toggle="collapse"
    data-bs-target="#menu"
    aria-controls="menu" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link text-success" href="#">Home </a></li>
                <li class="nav-item"><a class="nav-link text-success" href="usuarios.php">Usuarios </a></li>
                <li class="nav-item"><a class="nav-link text-success" href="Altauser.php">Nuevo </a></li>
            <li class="nav-item"><a class="nav-link text-success" href='UsuariosPresentismo.php'>Listado</a></li>
                    <li class="nav-item dropdown">
                <a class="nav-link text-success dropdown-toggle " href="#" 
                id="navbarDropdown" role="button"
                 data-bs-toggle="dropdown" href="#">Reportes</a>
                <ul class="dropdown-menu bg-light">
                    <li><a class="dropdown-item text-success" href="">Reporte 1</a></li>
                    <li><a class="dropdown-item text-success" href="">Reporte 2</a></li>
                    <li> <a class="dropdown-item text-success" href="">Reporte 3</a></li>
</ul>
</li>
                <li class="nav-item">
                <a class="nav-link text-success" href="#">Créditos </a>
</li>
<li>
<form class="d-flex" method="post" action="ResultadoBusqueda.php" >
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="Busqueda">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </li>
<li class="nav-item">
<a class="nav-link text-success" href="cerrarsesion.php">
                    Salir</a>
</li>
</ul>             
</div>
</form>
    </nav>
</header>
<section>
<body class="bg-success">
    <div class="container">
        <p class>Bienvenido a Système de Gestion Flexible</p>
        <div class="imagen">        
            <img src="Preview-fotor-bg-remover-2024050919831.png">
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
// Función de paginación
function Getpaginacion($conexion): void {
  $registros_por_pagina = 2;
  $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
  $inicio = ($page - 1) * $registros_por_pagina;
  
  // Consulta para obtener el total de registros
  $sql_total = "SELECT COUNT(*) as total FROM loginn";
  $result_total = $conexion->query($sql_total);
  $total_registros = $result_total->fetch_assoc()['total'];
  
  // Consulta para obtener los registros de la página actual
  $sql_usuarios = "SELECT * FROM loginn LIMIT $inicio, $registros_por_pagina";
  $result_usuarios = $conexion->query($sql_usuarios);
  
  
  if ($result_usuarios->num_rows > 0) {
      echo "
     <div class='mt-2 table-responsive'>
        <table class='table table-striped table-hover bg-light'> <!-- crea una tabla -->
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
              <tbody>";
      while ($row = $result_usuarios->fetch_assoc()) {
          $DNI = htmlspecialchars($row['DNI']);
          echo "<tr>
                  <td>" . htmlspecialchars($row['Nombre']) . "</td>
                  <td>" . htmlspecialchars($row['Apellido']) . "</td>
                  <td>" . $DNI . "</td>
                  <td>" . htmlspecialchars($row['Cargo']) . "</td>
                  <td>" . htmlspecialchars($row['Perfil']) . "</td>
                  <div class='button-container'>
                  <td>
                      <a href='verdetalleuser.php?valor=$DNI'>
                 <a href='verdetalleuser.php?valor=$DNI' class='btn btn-primary btn-sm'>Ver</a>                      </a>
                      <a href='ModificarUser.php?valor=$DNI' class='btn btn-sm btn-warning'>Editar</a>
                      <a class='btn btn-sm btn-danger ' href='EliminarUsuario.php?valor=$DNI'
                       onclick='return confirm(\"¿Realmente quiere eliminar este registro?\")'>Eliminar</a>
                      <a href='EnviarPresentismo.php?valor=$DNI' class='btn btn-sm btn-success'>Presentismo</a>
                  </td>
              </tr>";
      }
      echo "</tbody></table>";
  } else {
      echo "No se encontraron usuarios.";
  }
  
  // Generar enlaces de paginación
  $total_paginas = ceil($total_registros / $registros_por_pagina);
  echo "<nav aria-label='Page navigation'>
          <ul class='pagination justify-content-center'>";
  for ($i = 1; $i <= $total_paginas; $i++) {
      if ($i == $page) {
          echo "<li class='page-item active' aria-current='page'>
                  <span class='page-link bg-light text-success'>$i</span>
              </li>";
      } else {
          echo "<li class='page-item'>
                  <a class='page-link' href='usuarios.php?page=$i'>$i</a>
              </li>";
      }
  }
  echo "</ul></nav>";
  $conexion->close();
}

?>