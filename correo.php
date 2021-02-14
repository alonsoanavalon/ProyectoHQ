<?php



$nombre = $_POST['name'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$destinatario = "gray.import.export@gmail.com";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje: $mensaje";

mail ($destinatario, $asunto, $carta);
echo"<script>alert('Correo enviado exitosamente')</script>";
echo"<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>