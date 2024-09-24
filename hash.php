<?php

$clave="123456";

# Algoritmos deprecados
echo md5($clave);
echo "<br>";
echo sha1($clave);
echo "<br>";
# Hash
echo hash("md5",$clave);

echo "<br>";
# Ver algoritmos soportados 
foreach(hash_algos() as $algoritmos){
   # echo $algoritmos."<br>";
}

# Recomendada
echo "<br>";
echo password_hash($clave, PASSWORD_DEFAULT);
echo "<br>Bcrypt<br>";
echo password_hash($clave, PASSWORD_BCRYPT);

# Verificar
$clave_procesada=password_hash($clave, PASSWORD_BCRYPT);
echo password_verify($clave, $clave_procesada);





?>