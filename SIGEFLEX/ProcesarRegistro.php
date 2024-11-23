<?php 
session_start(); // Inicia sesión
include 'db.php'; // Enlaza a la base de datos

// Obtiene los valores del formulario
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$name = $_POST['Name'];
$surname = $_POST['Surname'];
$DNI = $_POST['DNI'];
$tel = $_POST['Tel'];
$telop = $_POST['telop'];
$cargo = $_POST['Cargo'];
$perfil = $_POST['Perfil'];
$andress = $_POST['Andress'];
$state = $_POST['State'];
$city = $_POST['City'];


// Inserta los datos del usuario y la imagen
$query = "INSERT INTO loginn(usuario, contraseña, Nombre, Apellido, DNI, Perfil, Cargo, Telefono, telop, Direccion, Ciudad, Provincia) 
          VALUES('$correo', '$pass', '$name', '$surname', '$DNI', '$perfil', '$cargo', '$tel', '$telop', '$andress', '$city', '$state')";
try{
if ($conexion->query($query) === TRUE) {
    header('Location: index.php'); // Redirige en caso de éxito
    exit();
} else {
    // Manejo del error de duplicado
    if ($conexion->errno == 1062) {
        echo "El DNI ingresado ya está registrado. Por favor, utiliza otro.";
    } else {
        // Muestra cualquier otro error que ocurra
        echo "Error al intentar registrar el usuario: " . $conexion->error;
    
    }  }  
}catch (Exception $e) {
    // Captura excepciones inesperadas
    echo "El DNI ingresado ya esta registrado. Por favor, utiliza otro. ";
}
?>