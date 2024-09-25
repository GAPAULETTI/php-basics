<?php

# Casos de variables nulas
#$numero=NULL;
#$numero;
#Elimina la variable
unset($numero);

#Is NULL

if(is_null($numero)){
    echo "Es null";
}else{
    echo "Not null";
}

# Empty
$numero2=0;

if(empty($numero2)){
    echo "Esta vacia";
}else{
    echo "No esta vacia";
}


# Isset
# Idem a las anteriores, si la variables esta seteada o definida con un valor, va a cumplir con la condicion



?>