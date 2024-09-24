<?php

function promedio_alumnos($nota_1,$nota_2,$nota_3){
    $promedio=($nota_1+$nota_2+$nota_3)/3;
    return $promedio;

}

echo "El promedio es: ".promedio_alumnos(4,7,8);

?>