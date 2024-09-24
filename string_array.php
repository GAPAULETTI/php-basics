<?php

$fecha_1="2021/11/29";
$numero="Uno dos tres cuatro";

$array_fecha=explode("/",$fecha_1);

$array_numero=explode(" ", $numero);

$array_fecha[1];

echo "[".$numero."]";

# Divide el array con el separador y el indice indica el nro de elemento

echo "<br>Divide el array con el separador y el indice indica el nro de elemento";
echo "<br>".$array_numero[2];

# Divide el array en la cantidad del delimitador a partir del primer separador
$array_numero2=explode(" ", $numero,2);

echo "<br>Divide el array en la cantidad del delimitador a partir del primer separador";
echo "<br>".$array_numero2[1];