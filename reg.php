<?php
$link = mysql_connect("localhost","root","") or die ("<h2>No se encuentra servidor"</h2>);;
$db= mysql_select_db("userstierra",$link) or die ("<h2>Error de conexion</h2>")

$nombre=$_Post('nombre_user');
$email=$_Post('correo_electronico');
$passwd=$_Post('contraseña');
$rPass=$_Post('Rpass');
$biando=$_Post('bando');


$req=(srtlen($nombre)*strlen($email)*strlen($passwd)*strlen($rPass)*strlen($biando))or die("No se han llenado los campos")

if($passwd != $rPass){
	die('las contraseñas no coinciden <br><br><a href="registravista.html">Volver</a>');
}
$contraseñaUser=md5($contraseña);

mysql_query("INSET INTO datos VALUES ('$nombre','$email','$passwd','$biando')",$link)or die ("<h2>Error de conexion</h2>")
echo '
<script>
			alert("Registro Exitoso");
			location.href="loginvista.html";
		</script>
	'
?>