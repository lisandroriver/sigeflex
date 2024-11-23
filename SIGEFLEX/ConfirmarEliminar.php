<?php
session_start();
include 'db.php';
if (isset($_GET['valor']))
{
    ?>
    <p>Estas seguro que quieres eliminar este registro?</p>
    <a href = "<?=$_SERVER["HTTP_REFERER"]?>">Cancelar</a>
            <br>
            <a href = "EliminarUsuario.php/?valor=<?=$_GET["valor"]?>">Eliminar</a>
            <?php
        }
?>