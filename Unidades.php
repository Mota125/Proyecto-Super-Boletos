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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="css/estiloss.css">
        
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  <title>SUPER BOLETOS REGISTRO</title>
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
           <li><a href="nosotros.php">Nosotros</a></li>
           <li><a href="contacto.php">Contacto</a></li>
          
           <?php
           }
           if($usuarioSesion<>'' && $tipoSesion==1)
           {
               
         
           ?>
          
           
           <li><a href="Clientes.php">Clientes</a></li>
           <li><a href="Ventas.php">Ventas</a></li>
           <li><a href="Unidades.php">Unidades</a></li>
           <li><a href="veruni.php">Ver Unidad</a></li>
           


           <?php
           
       }
           ?>
           <li class="perfil"><a  href="logout.php" >
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
<header class="tab">
    <br><br>
			<h2>Resgistro De  Nueva Unidad De Transporte</h2> 	
        </header>
<form  class="tabla" action="guardarUnidad.php" method="post">
          <br>
		  <label >Numero De Placa</label>
          <input class="control" type="text" name="No_placa" placeholder="captura el numero de placa" required>
          </div>
		  <label>Marca</label>
          <input class="control" type="text" name="Marca" placeholder="Captura la Marca" required>
          <br>
		  <label >Modelo</label>
          <input class="control" type="text" name="Modelo" placeholder="captura el Modelo" required>
          <label >Chofer</label>
          <input class="control" type="text" name="Chofer" placeholder="captura el chofer asignado" required>
          <label >Capacidad</label>
          <input class="control" type="text" name="Capacidad" placeholder="captura la capacidad del bus" required>
          <br>
          <input class="boton" type="submit" value="Agregar Unidad">
          <br>     
		</form>		
        </header>			
   
    </section>
    <br><br><br>
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