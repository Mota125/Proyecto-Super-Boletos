<?php
	ModificarUsuario($_POST['Id'], $_POST['Titular'], $_POST['Fecha'], $_POST['Pasajeros'], $_POST['Precio'],$_POST['Importe'], $_POST['Horario'], $_POST['Lugar']);

	function ModificarUsuario($Id, $Titular, $Fecha, $Pasajeros, $Precio, $Importe, $Horario, $Destino )
	{
		include 'conexion.php';
		$mysqlconexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
		$consulta="UPDATE ventas SET Titular='".$Titular."', Fecha='".$Fecha."', Pasajeros='".$Pasajeros."', Horarios='".$Horario."' , Lugar='".$Destino."' WHERE Id='".$Id."' ";

        $mysqlconexion->query($consulta); 

        echo '<script>';
		echo 'alert("Datos actualizados con exito!!");';
		echo 'window.location.href="Ventas.php";';
        echo '</script>';
    
    }
    ?>