<?php
session_start();
if(isset($_SESSION['nombreUsuario']))
{
	$usuarioSesion=$_SESSION['nombreUsuario'];
    $tipoSesion=$_SESSION['tipoUsuario'];
    $id=$_GET['id'];
    include_once 'conexion.php';
    $mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
    $consulta="SELECT P.Id,P.destino,TP.Tipo,P.Precio,P.Cupo,P.Horarioss FROM productos as P JOIN tipoproductos as TP on P.IdTipoProducto=TP.Id WHERE P.Id='".$id."'";
    $resultado=$mysqlConexion->query($consulta);
    if($registro=$resultado->fetch_array(MYSQLI_ASSOC))
    {
        $destino=$registro['destino']; //importante aca tiene que ver mucho el cambio//
        $Tipo=$registro['Tipo'];
        $precio=$registro['Precio'];
        $Cupo=$registro['Cupo'];
        $Horarioss=$registro['Horarioss'];
     
    }
}
else
{
	$usuarioSesion='';
	$tipoSesion='';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>SUPER BOLETOS</title>
        
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
            <li><a href="Ventas.php">Ventas</a></li>

            <li><a href="contacto.php">Contacto</a></li>

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
            <br>
            
			<h2>DETALLES DE VIAJES</h2> 	
        </header>
            <form  class="tabla" action="guardarCompra.php" method="post">
                            <label class="label">Id</label>
                            <input class="control" type="text" name="id" readonly value="<?php echo $id ?>">
                            <label class="label">Destinos</label>
                            <input class="control" type="text" name="destino" readonly value="<?php echo $destino?>">
                            <label class="label">Tipo</label>
                            <input class="control" type="text" name="Tipo" readonly value="<?php echo $Tipo?>">
                            <label class="label">Precio</label>
                            <input  class="control" type="text" name="precio" readonly value="<?php echo $precio ?>">
                            <label class="label">Cupo</label>
                            <input class="control" type="text" name="Cupo" readonly value="<?php echo $Cupo?>">
                            <label class="label">Horario</label>
                            <input class="control" type="text" name="Cupo" readonly value="<?php echo $Horarioss?>">
                            
                            <label class="label">Boletos</label>
                            <input class="control" type="text" name="Pasajeros" required>
                            <label class="label">Confirmar Horario Elegido</label>
                            <input class="control" type="text" name="Horarios" required>
                            <label class="label">Confirmar Destino Elegido</label>
                            <input class="control" type="text" name="Lugar" required>
                            <label class="label">Nombre del titular</label>
                            <input class="control" type="text" name="Titular" required>
                            <br>
                            <input class="boton" type="submit" value="Reservar Boleto">
                </form>
			</header>
            <br><br><br><div class="piepagina">
        <br>
        <a href="https://api.whatsapp.com/send?phone=+529611604999&text=hola" target="_blank" rel="noopener noreferrer"> <img src="img/wha.png" width="65px"></a>
        <a href="https://twitter.com/bkevinprince7" target="_blank" rel="noopener noreferrer"><img src="img/twitter.png" width="65px"></a>
        <a href="https://www.facebook.com/kevin.prince99" target="_blank" rel="noopener noreferrer"><img src="img/facebook.png" width="65px"></a>
       <br>
       <p>&copy; Copyriht 2020.  Team la movie</p>
    </div>
	</body>
</html>