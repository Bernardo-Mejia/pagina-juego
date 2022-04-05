<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
            
    <form method="post" >
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="ejemplo@gmail.com">
        <input type="password" name="contraseña" placeholder="Contraseña">
        <input type="text" name="bando" placeholder="Tierra Clasica, Tierra Hueca, Tierra Plana">
        <input type="submit" name="register">
        <br>
        <a id="ingreso" href="index.html">Pagina Principal </a>
    </form>
    
    
        <?php 
        include("registrar.php");
        ?>

</body>
</html>
