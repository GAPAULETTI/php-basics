<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - PHP </title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>    
        <br>
        <label for="asignatura">Asignatura</label>
        <select name="asignatura" id="asignatura">
            <option value="ingles">Ingles</option>
            <option value="matematica">Matematica</option>
            <option value="lengua">Lengua</option>
            <option value="geografia">Geografia</option>
        </select>
        <br>
        <label for="opciones">
            <input type="checkbox" value="Completado" id="opciones" name="estado" >
            Completo
            <input type="checkbox" value="Incompleto" id="opciones" name="estado" >
            Incompleto
        </label>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>