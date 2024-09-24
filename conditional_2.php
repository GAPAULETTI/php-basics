<!--
    Pedir a un usuario edad y genero:
    - Si es hombre, debe tener mas de 65 años para jubilarse
    - Si es mujer, debe tener mas de 60 años
-->

<?php

    $edad=45;
    $genero="F";

    if($genero=="M"){
        if($edad >= 65){
            echo "Puede jubilarse";
        }else{
            echo "No puede jubilarse";
        }
    }elseif($genero=="F"){
        if($edad >= 60){
            echo "Puede jubilarse";
        }else{
            echo "No puede jubilarse";
        }
    }else{
        echo "Ingrese un género válido";
    }
?>