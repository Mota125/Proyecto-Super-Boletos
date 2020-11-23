<?php

session_start();
if(isset($_SESSION['nombreUsuario']))
{
    $usuarioSesion=$_SESSION['nombreUsuario'];
    $tipoSesion=$_SESSION['tipoUsuario'];
}

else{
    $usuarioSesion=' ';
    $tipoSesion=' ';
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>SUPER BOLETOS CONTACTO</title>
        
        <link rel="stylesheet" href="css/estiloss.css">
        
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
        
       
	</head>
	<body>
		<ul class="menu">
        <li><strong><a href="inicio.php">SUPER BOLETOS</a></strong></li>
        <?php
            if($usuarioSesion<>'' && $tipoSesion==2)
            {   
               
            ?>
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="catalogo.php">Servicios</a></li>
            <li><a href="Lista.php">Reservaciones</a></li>
            <li><a href="galeria.php">Galeria</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <?php
            }
            if($usuarioSesion<>'' && $tipoSesion==1)
            {
            ?>
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="catalogo.php">Reservaciones</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <?php
            
        }
            ?>
            <li class="perfil" >
            <a href="logout.php">
            <?php
            if($usuarioSesion<>'')
            {
                echo $usuarioSesion;
            }
            else
            {
                echo 'Iniciar sesión';

            }
            ?>
            </a>
            </li>
        </ul>
        <br><br>
        <section class="form-register2">
                <h4>Contacto</h4>
                <br>
          <form  action="correo.php.php" method="post">
		  
		  <label>Nombre</label>
          <input class="controlcon" type="text" name="nombre" placeholder="Captura tu nombre" required>
          <br>
		  
		  <label>Correo</label>
          <input class="controlcon" type="text" name="correo" placeholder="Captura tu correo" required>
          <br>
		  <label >Mensaje</label>
          <input class="controlcon" type="text" name="mensaje" placeholder="captura tu mensaje" required>
          <br>
          <input class="boton" type="submit" value="enviar">
          <br>     
		</form>					
    </section>
        
       

        <br><br><br><br>
        <div class="piepagina">
        <br>
        <a href="https://api.whatsapp.com/send?phone=+529611604999&text=hola" target="_blank" rel="noopener noreferrer"> <img src="img/wha.png" width="65px"></a>
        <a href="https://twitter.com/bkevinprince7" target="_blank" rel="noopener noreferrer"><img src="img/twitter.png" width="65px"></a>
        <a href="https://www.facebook.com/kevin.prince99" target="_blank" rel="noopener noreferrer"><img src="img/facebook.png" width="65px"></a>
       <br>
       <p>&copy; Copyriht 2020.  Team la movie</p>
    </div>
	</body>
</html>