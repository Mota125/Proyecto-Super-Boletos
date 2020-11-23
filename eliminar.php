<?php
    
    EliminarReservar($_GET['Id']);

    function EliminarReservar($Id)
    {
        include 'conexion.php';
        $mysqlconexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
        $consulta="DELETE FROM ventas WHERE Id='".$Id."' ";
        $mysqlconexion->query($consulta);
    
    }
    echo '<script>';
        echo 'alert("Reservacion Eliminada Con Exito!!");';
        echo 'window.location.href="Ventas.php";';
    echo '</script>';
?>