
<!Doctype html>
<html lang="es-ES">
<head>
    <title>SIGEFLEX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body class="bg-success d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-white p-3 rounded-1 shadow-lg" style="max-width: 450px; width:90%;">
<form action="metadatos.php" method="POST">
    <div class="d-flex justify-content-center" style="height: 4rem;">
    <img
    src="login-icon-3.jpg"
    alt="login-icon"
style="height: 4rem;"
>
    </div>
   <div class="text-center fs-1 fw-bold">Login</div>
    <br>
    <div class="input-group mt-3 justify-content-center">
        <div class="input-group-text bg-success">
            <img
    src="login-icon-3.jpg"
    alt="login-icon"
style="height: 1rem;"
>
        </div>
   <center><input class="form-control" type="text" placeholder="Username" name="user" required></center> 
        </div>
        <div class="input-group mt-3 justify-content-center">
        <div class="input-group-text bg-success">
            <img
    src="password-icon-png-2.jpg"
    alt="login-icon"
style="height: 1rem;"
>
        </div>
    <center><input class="form-control" type="password" placeholder=" Password" name="contra" required></center>
        </div>
        <center> <input type="submit" class="btn btn-success w-50 mt-5" value="LOG IN"></center>
    </form>
    <div class="mt-3 text-center text-dark">
            <p>¿No tenes una cuenta? <a href="registro.php" class="text-decoration-none">Registrate</a></p>
        </div>
    <div class="text-center text-muted mt-4">
    <div class="d-flex align-items-center">
    <div style="font-size: 0.9rem"> los derechos reservados para la EEST N°1 "Gral José de San Martín" <img src="logo.png" height="50" width="50"></div>
    </div>
</div>
</body>
</html>