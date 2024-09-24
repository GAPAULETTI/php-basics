<?php
    
    $pc=["HD","SSD","CD","DVD","PenDrive"];
    echo "Array completo<br>";
    foreach($pc as $storage){
        echo $storage."<br>";
    }
    # Muestra todos los componentes menos CD
    echo "<br>                 Utilizando continue<br>";
    foreach($pc as $storage){
        if($storage=="CD"){
            continue;
        }
        echo $storage."<br>";
    }

    echo "<br>Utilizando break<br>";
    foreach($pc as $storage){
        if($storage=="CD"){
            break;
        }
        echo $storage."<br>";
    }
?>