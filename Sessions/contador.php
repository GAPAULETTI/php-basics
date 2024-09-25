<?php
    session_name("Login");
    //session_id("php") Editar Id de session
    session_start();

    if(isset($_SESSION['contador'])){
        $_SESSION['contador']++;
    }else{
        $_SESSION['contador']=1;
    }

    $_SESSION['contador']=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones PHP</title>
</head>
<body>
    <?php 
        echo session_id();
        echo "<br>";
        echo session_name()."<br>";

        echo "Nombre = ".$_SESSION["Nombre"]."<br>";
        echo "Nombre = ".$_SESSION["Apellido"]."<br>";
        echo "Nombre = ".$_SESSION["Pais"]."<br>";

    ?>
    <br><br>
    <a href="index.php">Inicio</a>
    <br>
    <a href="cerrar.php">Eliminar Sesion</a>
</body>
</html>