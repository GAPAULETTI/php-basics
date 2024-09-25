<?php
    if($_POST['usuario']=="Gaston" && $_POST['clave']=="1234"){

        session_name("Login");
        session_start();
    
        $_SESSION["Nombre"]="Gaston";
        $_SESSION["Apellido"]="Pauletti";
        $_SESSION["Pais"]="Argentina";

       

        if(headers_sent()){
            echo "<script>window.location.href='index.php';</script>";
        }else{
            header("Location: contador.php");
        }

        #echo "Sesion iniciada";
    }else{
        echo "Datos incorrectos";

    }

?>