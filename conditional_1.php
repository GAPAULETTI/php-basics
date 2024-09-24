 
<!-- Ofrecer un descuento según el nro de computadoras que adquieran.
    - Si son menos de 5 se ofrece el 10% de descuento   
    - Si el numero es mayor o igual a 5 pero menor a 10, se otorga el 20% desc.
    - Si son mas de 10 unidades el descuento es del 40%
El precio de cada computadora es de $700 -->

<?php
    
    $cantidad=10;

    $total=$cantidad*700;

    if($cantidad<5){
        $total=$total-($total*0.10);
    }elseif($cantidad>=5 && $cantidad<10){
        $total=$total-($total*0.20);
    }elseif($cantidad>=10){
        $total=$total-($total*0.40);
    }

    echo "El precio total es de $".$total;
?>

