<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo!!!</title>
</head>
<body>
    <h1>
        <?php
           $nombre = $_POST['nombre'];
           $asignatura = $_POST['asignatura'];
           $estado = $_POST['estado'];

           echo $nombre." ".$asignatura." ".$estado;
        ?>
    </h1>
    <h2> Utilizando multiple checkbox</h2>
    <br>
    <h3>
        <?php
            foreach($_POST['materias'] as $materia){
                echo $materia."<br>";
            } 
        ?>
    </h3>
</body>
</html>