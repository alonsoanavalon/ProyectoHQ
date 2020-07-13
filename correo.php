<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 $destino = "3lphono@gmail.com";
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nAsunto: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    echo "<h4>Mensaje enviado exitosamente</h4>"
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar
?>