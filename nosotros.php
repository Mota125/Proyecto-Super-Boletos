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
			
           
      
            <div id="acerca">
                <strong><h2>Acerca de nosotros</h2></strong>
                <p id="parrafo1">
                Desde el surgimiento de nuestra empresa que fue en 2010, hemos estado comprometido 
                con el servició que ofrecemos, ya que la prioridad ha sido y será nuestros usuarios, 
                nos esmeramos para que tengan un buen trato y comodidad durante su viaje, por lo 
                que ofrecemos entretenimiento durante el viaje, como es música, televisión.  
                Hacemos revisión muy continuas del estado de nuestros vehículos, para detectar 
                cualquier problema.
                También hemos estado incrementando nuestras rutas de servicio, para poder 
                ofrecer un mejor servicio a nuestros clientes en cuanto a su destino, por 
                lo que nos hemos estado comprometiendo en mejorar nuestro servicio.
                </p>

            </div>
            <div id="acerca">
                <strong><h2>Misión</h2></strong>
                <p id="parrafo2">
                Promover, desarrollar y explotar soluciones de movilidad, mediante la gestión y operación 
                innovadora, eficiente y sostenible de servicios a la ciudadanía, somos una empresa sólida 
                y comprometida con sus clientes, ofreciéndoles el mejor servicio diferenciado en 
                transporte de pasajeros proporcionando un servicio rápido, seguro, cómodo y confiable. 
                Contando con transporte de alta calidad y comodidad y a buen precio.
                </p>

            </div>
            <div id="acerca">
                <strong><h2>Visión</h2></strong>
                <p id="parrafo1">
                Ser la empresa líder de transportes de pasajeros satisfaciendo las necesidades de nuestros 
                clientes brindando un servicio de excelencia, para lograr un reconocimiento de servicio 
                turístico y de traslado a nivel regional en el Estado de Chiapas, brindando el mejor servicio 
                a los clientes.
                </p>

            </div>
            <br><br><br>
            <div id="parrafo6">
            <div class="container">
       
       <div class="card">
           <img src="img/KE.jpg">
           <h4>Kevin Moreno Jimenez</h4>
           <p></p>
           
       </div>
       
       <div class="card">
           <img src="img/jo.jpg">
           <h4>Jovany Mota Escobar</h4>
           <p></p>
           
       </div>
       
       <div class="card">
           <img src="img/om.jpg">
           <h4>Henrry Padilla Perez</h4>
           <p></p>
           
       </div>
       <div class="card">
           <img src="img/kiroshi.jpg">
           <h4>Maynor Perez Palacios</h4>
           <p></p>
          
       </div>
       
   </div>
         <h1 class="des">DESARROLLADORES DEL SITIO WEB</h1>  
    </div>
    <br>
    <br>
    <br>
    <br>
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