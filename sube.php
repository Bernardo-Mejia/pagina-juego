<?php 
$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];
if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado,'archivos/'.$nombre)){
		echo "Archivo guardado con exito";

	}else{
		echo "Archivo no se pudo guardar";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Archivo arriba</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<br>
	<a id="ingreso" href="index.html">Pagina Principal </a>
</body>
</html>