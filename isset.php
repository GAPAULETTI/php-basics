<?php

# Casos de variables nulas
#$numero=NULL;
#$numero;
#Elimina la variable
unset($numero);

if(is_null($numero)){
    echo "Es null";
}else{
    echo "Not null";
}

$numero2=0;
if(empty($numero2)){
    echo "Esta vacia";
}else{
    echo "No esta vacia";
}



?>