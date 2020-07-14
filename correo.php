<?php

    include("Mailer/src/PHPMailer.php");
    include("Mailer/src/SMTP.php");
    include("Mailer/src/Exception.php");


    try {

        $emailTo = $_POST["email"]; 
        $subject = $_POST["asunto"];
        $bodyEmail = $_POST["mensaje"];
      
        $fromemail = "3lphono@gmail.com";
        $fromname = "3lpho";
        $host = "gmail.live.com"; // gmail
        $port = "587";
        $SMTPAuth = "login";
        $SMTPSecure = "tls";
        $password = "elmasmejor0910"; 
        
        $mail = new  PHPMailer\PHPMailer\PHPMailer();
      
        //Tell PHPMailer to use SMTP
           $mail->isSMTP();
           $mail->SMTPDebug = 1;
           $mail->Host = $host;
           $mail->Port = $port;
           $mail->SMTPAuth = $SMTPAuth;
           $mail->SMTPSecure = $SMTPSecure;
           $mail->Username = $fromemail;
           $mail->Password = $password;
           
           $mail->setFrom($fromemail, $fromname);
           $mail->addAddress($emailTo);
      
           // asunto
           $mail->isHTML(true);
           $mail->Subject = $subject;
           // cuerpo email
           $mail->Body = $bodyEmail;
      
           if (!$mail->send()) {
            echo "no se envio"; die();
           }
      
              echo "Correo enviado con exito!!"; die();
      
       } catch (Exception $e) {
        var_dump($e->getMessage());die();
        
       }





?>