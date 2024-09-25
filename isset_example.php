<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="POST" >
            <input type="number" name="numero">
            <button type="submit">Enviar</button>
        </form>

        <?php
            if(isset($_POST['numero']) && $_POST['numero']!=""){
                $numero=$_POST['numero'];
                for($i=12;$i>=1;$i--){
                    $total=$numero*$i;
                    echo $numero." x ".$i." = ".$total."<br>";
                }
            }
        ?>
</body>
</html>