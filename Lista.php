<?php
session_start();
if(isset($_SESSION['nombreUsuario']))
{
    $usuarioSesion=$_SESSION['nombreUsuario'];
    $tipoSesion=$_SESSION['tipoUsuario'];
    $idUsuario=$_SESSION['idUsuario'];
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
        <title>SUPER BOLETOS CATALOGO</title>
        
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
            <li class="perfil"><a href="logout.php">
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
            </a></li>
        </ul>
        <header class="tab">
            <br><br>
            
			<h2>VIAJES RESERVADOS</h2>
				<div>
					<table class="tabla2">
						<tr>
                         <th class="control3">Nombre Titular</th>
                         <th class="control3">Fecha Realizada</th>
                         <th class="control3">Boletos</th>
                         <th class="control3">Precio<th>
                         <th class="control3">Importe<th>
                         <th class="control3">Horario Elegido</th>
                         <th class="control3">Destino </th>   
						</tr>
							<?PHP
								include_once 'conexion.php';
								$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
                                $consulta="SELECT ventas.Fecha,ventas.Pasajeros,ventas.Precio,ventas.Importe,ventas.Horarios,ventas.Lugar,ventas.Titular FROM ventas where IdUsuario=$idUsuario";
								$resultado=$mysqlConexion->query($consulta);
								while($registro=$resultado->fetch_assoc())
								{									
									?>
									<tr>
                                    <td class="control2"><?php echo $registro['Titular'] ?></td>
                                    <td class="control2"><?php echo $registro ['Fecha'] ?></td>
                                    <td class="control2"><?php echo $registro ['Pasajeros'] ?></td>
                                    <td class="control2"><?php echo $registro ['Precio'] ?><td>
                                    <td class="control2"><?php echo $registro ['Importe'] ?><td>
                                    <td class="control2"><?php echo $registro ['Horarios'] ?></td>
                                    <td class="control2"><?php echo $registro ['Lugar'] ?></td>                                 
									</tr>
									<?PHP
								}	
							?>
					</table>
				</div>
			</header>
        <br><br>
        
        <br><br>
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