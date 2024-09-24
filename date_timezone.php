<?php

date_default_timezone_set("America/Argentina/Ushuaia");

$fecha_usa = date("Y-d-m");

echo "<br>".$fecha_usa;

echo "<br>";
echo date("d/m/y");
echo "<br>";
echo date("l d F Y");
echo "<br>Agregando hora <br>Formato 12 hs.<br>";
echo date("h:i a");
echo "<br>Formato 24 hs.<br>";
echo date("H:i");

echo "<br>Obtener fecha en español<br>";

function fecha_esp_larga(){

    $conversor_dia=[
        "Monday"=>"Lunes",
        "Tuesday"=>"Martes",
        "Wednesday"=>"Miercoles",
        "Thursday"=>"Jueves",
        "Friday"=>"Viernes",
        "Saturday"=>"Sabado",
        "Sunday"=>"Domingo"
    ];

    $conversor_mes=[
        "01"=>"Enero",
        "02"=>"Febrero",
        "03"=>"Marzo",
        "04"=>"Abril",
        "05"=>"Mayo",
        "06"=>"Junio",
        "07"=>"Julio",
        "08"=>"Agosto",
        "09"=>"Septiembre",
        "10"=>"Octubre",
        "11"=>"Noviembre",
        "12"=>"Diciembre"
    ];

    $fecha_final=$conversor_dia[date("l")]." ".date("d")." de ".$conversor_mes[date("m")]." de ".date("Y");
    return $fecha_final;
}
echo fecha_esp_larga();
?>