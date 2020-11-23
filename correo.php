<?php
    $destinatario = 'jovanymota.cetis138@gmail.com';
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $header = "Mensaje Enviado";
    $mensajeCompleto = $mensaje."\nAtentamente:". $nombre;

    mail($destinatario, $mensajeCompleto, $header);
    echo"<script>alert('correo enviado exitosamente')</script>";
    echo"<script> setTimeout(\"location.href'contacto.php'\",1000)</script>";
    ?>