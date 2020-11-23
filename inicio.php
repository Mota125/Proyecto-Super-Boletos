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
		<title>SUPER BOLETOS</title>
       
        <link rel="stylesheet" href="css/estiloss.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
        
	</head>

		<ul class="menu">
            
            <li><strong><a href="inicio.php">SUPER BOLETOS</a></strong></li>
            <?php
            if($usuarioSesion<>'' && $tipoSesion==2)
            {   
                echo '<script>alert("BIENVENIDO A SUPER BOLETOS")</script>';  
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
                
            echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';  
            ?>
            <li><a href="Clientes.php">Clientes</a></li>
            <li><a href="ventas.php">Ventas</a></li>
            <li><a href="Unidades.php">Unidades</a></li>
            <li><a href="veruni.php">Ver Unidad</a></li>
          
          
          
            <?php
        }
            ?>
            <li class="perfil" ><strong><a class="" href="logout.php">  
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
            </a></strong></li>
        </ul>
            <br><br><br><br>
            <br>
            
            
            <div id="parrafo3">
            <marquee scrollamount="15">..............BIENVENIDO A SUPER BOLETOS.COM..............</marquee>
               
                <h2 >Super Boletos <br> Calidad,  eficiencia y rapidez</h2>
                <br>
                <h2>Compra tus boletos de autobús con Super Boletos</h2>
                <br><br>
                <p style="color:  #8bb4bd; font-size:35px;">AHORRA TIEMPO Y DINERO.</p>
            </div>    
            <br>
            <br>
            <div id="parrafo4">
                <div class="slider">
                    <ul>
                        <li><img  src="img/sancris.jpeg" width="700px" height="450px"></li>
                        <li><img src="img/tapachula.jpg" width="700px" height="450px"></li>
                        <li><img src="img/palenque.jpg" width="700px" height="450px"></li>
                        <li><img src="img/villa.jpg" width="700px" height="450px"></li>
                      

                        
                        

                       
                    </ul>

                </div>

            </div>  
            <br><br>
            <div id="parrafo4">
            <strong><h3>Económico y confortable: viajar en autobús por Chiapas</h3></strong>   
            <br>
               <p>Los autobuses son, el medio de transporte colectivo más utilizado en México con unas 
                   cifras de pasajeros mucho más elevadas que las de los aviones. Entre los autobuses 
                   de Grupo Super Boletos  podrás encontrar la forma más confortable de viajar por todo 
                   Chiapas. Da igual si quieres ir al hermoso y mítico pueblo mágico de san Cristóbal de 
                   las casas o  de disfrutar del bello mar en Tonalá Chiapas, en Super Boletos encontrarás 
                   toda la información necesaria para organizar tu viaje en bus. Cómodo y rápido: 
                   comparar y comprar boletos de autobús en línea.
                </p>
                <br>
                

            
                <h3>Ventajas de viajar en autobús</h3>
                <br>
                <p>
                Viajar en autobús es cada vez más confortable y seguro. Las líneas están actualizando sus 
                autobuses constantemente y dotándolos con los más altos estándares de seguridad. Además los 
                autobuses han mejorado mucho en temas de confort: asientos reclinables, entretenimiento a 
                bordo (películas, radio), wifi, enchufes... Viajar en autobús ya no es lo que era y, todo 
                esto, junto con los precios económicos que ofrecen, hace de los autobuses un medio de 
                transporte muy atractivo. Sin olvidar, que es uno de los medios de transporte más respetuosos 
                con el medio ambiente, en comparación con el auto, el tren o el avión, con un consumo por 
                viajero/kilómetro transportado mucho más bajos. Además, viajar en autobús te proporciona una 
                mayor libertad. Sus rutas permiten no solo viajar a las ciudades más importantes del estado, 
                si no también a pequeñas comunidades
                </p>

            </div> 
            <br>
            <br>
            <br>
            <div id="parrafo3">
            <strong><h3>Boletos de autobús en donde estés.</h3></strong>   
            <br>
            <table  >
        <tr>
             
            <td>
                <h3 style="text-align: justify; font-size: 30px; color:  #8bb4bd;">Compra sin filas desde tu computadora o celular. <br><br>Rapido y Seguro</h3>
                <p style="text-align: center; color: white;">
                <br>
                      
                       
                       
                        <img class="imagen5" src="img/rapido.png" title="rapido" >
                        <img class="imagen6" src="img/seguro.png" title="seguro">
                </p>
            </td> 
            <td><img src="img/img1.jpg" width="600px"></td>
            
        </tr>
        </table>
       
                    
               
             
               <br><br>
            </div>   

            <br><br><br>
            <div id="parrafo3">
            <strong><h3>Boletos</h3></strong>   
            <br>
               <p></p>
               <img  class="imagen" src="img/boleto.png" alt="">
               <img  class="imagen2" src="img/boleto.png" alt="">
               <img  class="imagen3" src="img/boleto.png" alt="">
               <img  class="imagen" src="img/boleto.png" alt="">
               <img  class="imagen2" src="img/boleto.png" alt="">
               <img  class="imagen3" src="img/boleto.png" alt="">
               <img  class="imagen" src="img/boleto.png" alt="">
                    
               
             
               <br><br><br><br><br><br><br>
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