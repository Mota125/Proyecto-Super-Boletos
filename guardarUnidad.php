<?php
$No_placa=$_POST['No_placa'];
$Marca=$_POST['Marca'];
$Modelo=$_POST['Modelo'];
$Chofer=$_POST['Chofer'];
$Capacidad=$_POST['Capacidad'];
include_once 'conexion.php';
$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
$consulta="INSERT INTO unidad(No_placa,Marca ,Modelo,Chofer,Capacidad)
VALUES ('$No_placa','$Marca','$Modelo','$Chofer','$Capacidad')";
if($resultado=$mysqlConexion->query($consulta))
{

    header("Location:Unidades.php");
}
else
{
    header("Location:index.php");
}
?>