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
            
			<h2>VIAJES DISPONIBLES</h2>
				<div>
					<table class="tabla2">
						<tr>
                            <th class="control3">ID</th>
							<th class="control3">DESTINOS</th>
							<th class="control3">TIPO</th>
							<th class="control3">PRECIO</th>
							<th class="control3">CUPO</th>
                            <th class="control3">HORARIOS</th>
                            <th class="control3" >$</th>
                            <br>
						</tr>
							<?PHP
								include_once 'conexion.php';
								$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
								$consulta="SELECT P.Id,P.destino,TP.Tipo,P.Precio,P.Cupo,P.Horarioss FROM productos as P JOIN tipoproductos as TP on P.IdTipoProducto=TP.Id";
								$resultado=$mysqlConexion->query($consulta);
								while($registro=$resultado->fetch_assoc())
								{									
									?>
									<tr>
										<td  class="control2" ><?PHP echo $registro["Id"];?></td>
										<td  class="control2"><?PHP echo $registro["destino"];?></td>
										<td  class="control2"><?PHP echo $registro["Tipo"];?></td>
										<td  class="control2"><?PHP echo $registro["Precio"];?></td>
										<td class="control2"><?PHP echo $registro["Cupo"];?></td>
                                        <td class="control2"><?PHP echo $registro["Horarioss"];?></td>
										<td class="boton2"><a href="detalle.php?id=<?PHP echo $registro["Id"];?>"><img src="img/comprar.png" width="35px"> </a></td>
									</tr>
									<?PHP
								}	
							?>
					</table>
				</div>
            </header>
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