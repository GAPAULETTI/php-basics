<?php
    session_name("Login");
    session_start();

    session_destroy();
    
    if(headers_sent()){
        echo "<script>window.location.href='index.php';</script>";
    }else{
        header("Location: index.php");
    }
    //Alternativa para cerrar sesion
    //session_unset(); 
?>