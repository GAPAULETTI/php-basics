<?php

function saludo(){
    echo "Hola que tal!!!";
}

saludo();

# Con Parámetro

function saludo_personal($nombre){
    return "<br>Hola $nombre, como estas?";
}

echo saludo_personal("Gaston");