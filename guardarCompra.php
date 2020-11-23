<?php
$idProducto=$_POST['id'];
$destino=$_POST['destino'];//aca ojoa
$precio=$_POST['precio'];
$Pasajeros=$_POST['Pasajeros'];
$Horarios=$_POST['Horarios'];
$Lugar=$_POST['Lugar'];
$Titular=$_POST['Titular'];
session_start();
$idUsuario=$_SESSION['idUsuario'];
$fecha=date("Y-m-d H:i:s");
if(empty($destino)) //valido que no sea vacío
{
     
   header("Location: catalogo.php");
   exit(); 
}
include_once 'conexion.php';
$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
$sqlConsulta="SELECT * FROM Productos WHERE Id='".$idProducto."'";
$resultado=$mysqlConexion->query($sqlConsulta);
    if($row = $resultado->fetch_array(MYSQLI_ASSOC))
    {   
        $Cupo =$row['Cupo'];
        $inventario=$Cupo-$Pasajeros; //resta la cantidad vendida
        if($inventario>=0)
        {
            $sqlModifica = "UPDATE Productos SET Cupo='$inventario' WHERE Id='".$idProducto."'"; //query que modifica la existencia
            if($modifica=$mysqlConexion->query($sqlModifica))
            {
                $importe=$Pasajeros*$precio;
                $sqlConsulta="INSERT INTO Ventas(IdUsuario,IdProducto,Fecha,Pasajeros,Precio,Importe,Horarios,Lugar,Titular)
                VALUES ('$idUsuario','$idProducto','$fecha','$Pasajeros','$precio','$importe','$Horarios','$Lugar','$Titular')";
                if($resultado=$mysqlConexion->query($sqlConsulta))
                {
                    
                    header("Location: catalogo.php");
                }
                else{
                    Header("Location: detalle.php?id=".$idProducto);
                }
            }
            else
            {
                Header("Location: detalle.php?id=".$idProducto); //en caso de existir algun error
            }
        }
        else
            {
                header("Location: detalle.php?id=".$idProducto); //en caso de existir algun error
            }
    }         
?>