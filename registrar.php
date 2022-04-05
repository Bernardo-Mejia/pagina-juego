<?php 
date_default_timezone_set("America/Mexico_City");

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['asunto']) >= 1 && strlen($_POST['comentario']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $contraseña = trim($_POST['asunto']);
        $bando = trim($_POST['comentario']);
        $fecha=date("d/m/y");
        $hora=date("g:i a");

	    $consulta = "INSERT INTO datos(nombre_user, correo_electronico, asunto, comentario, fecha,hora) VALUES ('$name','$email','$asunto','$comentario','$fecha','$hora')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>