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
<?php

$conexion=mysqli_connect('localhost','root','','tiendas');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
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
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <?php
            }
            if($usuarioSesion<>'' && $tipoSesion==1)
            {
            ?>
            <li><a href="Clientes.php">Clientes</a></li>
            <li><a href="ventas.php">Ventas</a></li>
            <li><a href="Unidades.php">Unidades</a></li>
            <li><a href="veruni.php">Ver Unidad</a></li>
         
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
            <br>
            <div>
<table class="tabla2">
<tr>
    <br><br>
<h2>Visualización De Clientes</h2>
<th class="control3">Id</th>
<th class="control3">Nombre Completo</th>
<th class="control3">Direccion</th>
<th class="control3">Correo Electronico</th>
<th class="control3">Password</th>
<th class="control3">Tipo</th>
   <?php   
   $sql="SELECT * from usuarios";
   $result=mysqli_query($conexion,$sql);

   while($mostrar=mysqli_fetch_array($result)){
?>

<tr>
<td class="control2"><?php echo $mostrar ['Id'] ?></td>
<td class="control2"><?php echo $mostrar ['NombreCompleto'] ?></td>
<td class="control2"><?php echo $mostrar ['Direccion'] ?></td>
<td class="control2"><?php echo $mostrar ['CorreoElectronico'] ?></td>
<td class="control2"><?php echo $mostrar ['Password'] ?></td>
<td class="control2"><?php echo $mostrar ['Tipo'] ?></td>
</tr>
<?php
   }
   ?>
</table>
<br>
<br>
<br>
<br>

</div>



</body>
</html>