<?php
$correo=$_POST['correo'];
$password=$_POST['password'];
include_once 'conexion.php';
$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
$consulta="SELECT * FROM usuarios WHERE CorreoElectronico='".$correo."'";
$resultado=$mysqlConexion->query($consulta);
if($registro=$resultado->fetch_array(MYSQLI_ASSOC))
{
    if($registro['Password']==$password)
    {
        session_start();
        $_SESSION['idUsuario']=$registro['Id'];
        $_SESSION['nombreUsuario']=$registro['CorreoElectronico'];
        $_SESSION['tipoUsuario']=$registro['Tipo'];

        header("Location:inicio.php");
        
    }
    else{
     
        header("Location: index.php");
        
    }
}
else{
    header("Location: index.php"); 
}
