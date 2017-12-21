<?php
    // Especificar correctamente el path al archivo class.phpmailer.php
    require_once('../PHPMailer_v5.0.2/class.phpmailer.php');

    $mail             = new PHPMailer();

    $body             = "Prueba de envio"; // Cuerpo del mensaje
    $mail->IsSMTP(); // Usar SMTP para enviar
    $mail->SMTPDebug  = 0; // habilita información de depuración SMTP (para pruebas)
                           // 1 = errores y mensajes
                           // 2 = sólo mensajes
    $mail->SMTPAuth   = true; // habilitar autenticación SMTP
    $mail->Host       = "smtp.ugr.es"; // establece el servidor SMTP
    $mail->Port       = 587; // configura el puerto SMTP utilizado
    $mail->SMTPSecure = "tls";
    $mail->Username   = "usuario"; // nombre de usuario UGR
    $mail->Password   = "contraseña"; // contraseña del usuario UGR
 
    $mail->SetFrom('usuario', 'Nombre y Apellidos, etc.');
    $mail->Subject    = "Asunto del mensaje";
    $mail->MsgHTML($body); // Fija el cuerpo del mensaje

    $address = "destinatario@dominio"; // Dirección del destinatario
    $mail->AddAddress($address, "Nombre del destinatario");

    if(!$mail->Send()) {
        echo "Error: " . $mail->ErrorInfo;
    }
    else {
        echo "¡Mensaje enviado!";
    }
?>