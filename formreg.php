<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <script type="text/javascript" src="scripts/validar_formulario.js"></script>
    <link rel="stylesheet" type="text/css" href="css/formulario.css">
</head>
<body>
            
    <!-- <form method="post" >
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="ejemplo@gmail.com">
        <input type="password" name="contraseña" placeholder="Contraseña">
        <input type="text" name="bando" placeholder="Tierra Clasica, Tierra Hueca, Tierra Plana">
        <input type="submit" name="register">
        <br>
        <a id="ingreso" href="index.html">Pagina Principal </a>
    </form> -->

    <section id="seccion14" class="section" data-scroll-spy>
      <h2 class="registrer">Regístrate aquí</h2>
      <form class="contact-form" action="https://formsubmit.co/bernardo.mejiaperez703@gmail.com" method="POST" target="_blank">
        <legend>Envíanos tus comentarios</legend>
        <input name="name" class="nombre-escrito" type="text" placeholder="Escribe tu nombre"
          title="Nombre sólo acepta letras y espacios en blanco" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
        <input name="email" type="email" placeholder="Escribe tu email" title="Email incorrecto"
          pattern="^[a-z0-9_-]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" required>
        <input name="asunto" type="text" placeholder="Asunto a tratar" title="El Asunto es requerido" required>
        <textarea name="comentario" rows="5" placeholder="Escribe tus comentarios"
          title="Tu comentario no debe exceder los 255 caracteres." data-pattern="^.{1,255}$" required></textarea>
        <input type="submit" value="Enviar">
        <div class="contact-form-response none">
          <p>Los datos han sido enviados</p>
        </div>
      </form>
    </section>
    <a id="ingreso" href="index.html">Pagina Principal </a>
    
        <?php 
        include("registrar.php");
        ?>

</body>
</html>
