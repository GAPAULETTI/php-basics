<?php

/* echo $_FILES['archivo']['name']."<br>";
echo $_FILES['archivo']['tmp_name']."<br>";
echo $_FILES['archivo']['type']."<br>";
echo $_FILES['archivo']['error']."<br>";
echo $_FILES['archivo']['size']."<br>";
 */

 # Validación por tipo MIME - Limitar el tipo de archivos permitidos
 # Link para buscar tipos de extensiones MIME
 # https://www.lifewire.com/file-extensions-and-mime-types-3469109
if(mime_content_type($_FILES['archivo']['tmp_name'])!="image/jpeg" && mime_content_type($_FILES['archivo']['tmp_name'])!="image.png"){
    echo "Tipo de archivo no admitido";
    exit();
}

# Limitar el tamaño del archivo a importar
# 3072 = 3MB
if(($_FILES['archivo']['size']/1024) > 3072){
    echo "El archivo supera el tamaño permitido!!";
    exit();
}

if(!file_exists("archivos")){
    if(!mkdir("archivos",0777)){
        echo "Error al crear carpeta";
        exit();
    }
}

chmod("archivos",0777);

if(move_uploaded_file($_FILES['archivo']['tmp_name'],"archivos/".$_FILES['archivo']['name'])){
    echo "Archivo cargado exitosamente";
}else{
    echo "Error al subir el archivo";
}

?>