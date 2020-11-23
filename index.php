<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  
  <title>SUPER BOLETOS LOGIN</title>
</head>
<body>
<section class="form-register">
<h4>INICIO DE SESIÓN</h4>

<form action="validarUsuario.php" method="post">
				<div>
          <img src="img/usuario.png" alt="avatar">
          <br>
					</div>
					<label>Correo</label>
          <input class="control" type="text" name="correo" placeholder="Captura tu correo" required>
          <br><br>
					<label >Contraseña</label>
          <input class="control" type="password" name="password" placeholder="captura tu contraseña" required>
          <br>
         
          <br>
          <br>
          <input class="boton" type="submit" value="Enviar">
          <br><br>
          <p><a href="registro.php">NO TENGO UNA CUENTA</a></p>
          
  
		    </form>					
    </div>
    </section>

</body>
</html>