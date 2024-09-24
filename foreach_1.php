<?php

    /*$cars=[
        "Ford" => "Fiesta",
        "Chevrolet" => "Astra",
        "Peugeot" => "206"
    ];
    
    foreach($cars as $clave => $valor){
        echo "Brand: ".$clave." - model: ".$valor."<br>";
    }
    */

    $cars = [
        ["marca" => "Ford", "modelo" => "Fiesta"],
        ["marca" => "Fiat", "modelo" => "Uno"],
        ["marca" => "Peugeot", "modelo" => "206"]
    ];
    

    foreach($cars as $clave){
        echo "Marca: ".$clave["marca"]." - model: ".$clave["modelo"]."<br>";
    }
    
?>