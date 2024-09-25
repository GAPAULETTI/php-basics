<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Archivos</title>
</head>
<body>
    <h3>Subir archivo con PHP</h3>
    <form action="carga_archivo.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" accept=".jpg, .png, .jpeg">
        <br><br>
        <button type="submit">Enviar</button>

    </form>
    
</body>
</html>