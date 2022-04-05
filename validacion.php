<?php
$usuario=$_POST['email'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['email']=$usuario;
$conexion=mysqli_connect("localhost","id16845465_admindatabase","Teestamamando_3785","id16845465_userstierra");
include('db.php');
$consulta="SELECT*FROM datos where correo_electronico='$usuario' and contraceña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas){
}else{
    ?>
    <?php
    include("validar.html");
  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
