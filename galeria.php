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
		<title>SUPER BOLETOS NOSOTROS</title>
       
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
            <li><a href="Clientes.php">Clientes</a></li>
            <li><a href="ventas.php">Ventas</a></li>
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
			
            <br>
        <h2 class="titulo">Galeria</h2>
               
      <div id="parrafo7">

      <div class="container2">
    <div class="item">
      <img src="img/palenque.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>Palenque </h3>
       
      </div>
    </div>
    
    <div class="item">
      <img src="img/sancris.jpeg" alt="" class="item-img">
      <div class="item-text">
        <h3>San Cristobal </h3>
        <p></p>
      </div>
    </div>
    
    <div class="item">
      <img src="img/tapachula.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>Tapachula</h3>
        <p></p>
      </div>
    </div>
    
    <div class="item">
      <img src="img/ton.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>Tonala</h3>
        
      </div>
    </div>
    
    
    <div class="item">
      <img src="img/villa.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>Villa Hermosa</h3>
        
      </div>
    </div>
    <div class="item">
      <img src="img/arri.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>Arriaga</h3>
       
      </div>
    </div>
    <div class="item">
      <img src="img/hu.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>Huixtla</h3>
        
      </div>
    </div>
    <div class="item">
      <img src="img/piji.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>Pijijiapan</h3>
        <p></p>
        
      </div>
    </div>
    
    <div class="item">
      <img src="img/cintalapa.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>Cintalapa</h3>
        <p></p>
      </div>
    </div>
  </div>
 </div>
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