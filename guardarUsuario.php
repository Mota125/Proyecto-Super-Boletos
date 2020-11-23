<?php
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$password=$_POST['password'];

include_once 'conexion.php';
$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
$consulta="INSERT INTO usuarios(NombreCompleto, Direccion,CorreoElectronico,Password,Tipo)
VALUES ('$nombre','$direccion','$correo','$password',2)";
if($resultado=$mysqlConexion->query($consulta))
{

    header("Location:index.php");
}
else
{
    header("Location:login.php");
}
?>