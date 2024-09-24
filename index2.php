<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo!!!</title>
</head>
<body>
    <h2> Utilizando multiple checkbox</h2>
    <br>
    
        <?php

            $materias=$_POST['materia'];

            foreach($materias as $materia){
                echo $materia."<br>";
            };


            echo "<br><br><br>";

            $modalidad=$_POST['estado'];
            foreach($modalidad as $estado){
                echo $estado."<br>";
            }

        ?>
    
</body>
</html>