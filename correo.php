<?php

if (isset($_POST['enviar'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'])) {
       $nombre = $_POST['nombre'];
       $correo = $_POST['correo'];
       $telefono = $_POST['telefono'];
       $mensaje = $_POST['mensaje'];
       $header = "From: amigofiel169@gmail.com" . "\r\n";
       $header = "Reply-To: amigofiel169@gmail.com" . "\r\n";
       $header = "X-Mailer: PHP/" . phpversion();
       $mail = @mail($nombre,$correo,$telefono,$mensaje,$header);
        if ($mail) {
            echo "<h6>¡Correo enviado exitosamente!</h6>"; 
        } 
    }
}