<?php
    $destinatario= 'gray.import.export@gmail.com';
    //Esto es el correo al que se enviará el mensaje.
    $nombre = $_POST['name'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde HQGray"
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";

?>