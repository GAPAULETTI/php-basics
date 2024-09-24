<?php

$cantidad_1=12732.5;
$cantidad_2=19324325564236.89;

echo "<br>Formatear con 2 decimales: ";
echo $cantidad_1=number_format($cantidad_1, 2);

echo"<br>Con separador de millar punto y decimal coma: ";
echo $cantidad_2=number_format($cantidad_2,2,".",",");


?>