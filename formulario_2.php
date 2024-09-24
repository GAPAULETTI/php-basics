<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - PHP </title>
</head>
<body>
    <form action="index2.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>    
        <br>
        <label for="materia">Materias</label>
        <select name="materia[]" id="materia" multiple>
            <option value="ingles1">Ingles I</option>
            <option value="matematica2">Matematica II</option>
            <option value="lengua2">Lengua II</option>
            <option value="geografia1">Geografia I</option>
        </select>
        <br>
        <label for="opcion-1">
            <input type="checkbox" value="Presencial" id="opcion-1" name="estado[]" >
            Presencial
        </label>
        <label for="opcion-2">
            <input type="checkbox" value="Remoto" id="opcion-2" name="estado[]" >
            Remoto
        </label>
        <label for="opcion-3">
            <input type="checkbox" value="Hibrido" id="opcion-3" name="estado[]" >
            Hibrido
        </label>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>