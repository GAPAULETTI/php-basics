<?php
        # Validacion
        if(!preg_match("/^[a-zA-Z]{3,10}$/",$_POST['usuario'])){
            echo "El usuario no coincide con el formato";
            exit();
        }
        
        if(!preg_match("/^[a-zA-Z0-9$@.-]{4,30}$/",$_POST['clave'])){
            echo "Clave no permitida";
            exit();
        }
        
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