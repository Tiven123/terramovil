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
<?php

/**
 * SCRIPT PARA ENVIAR CORREOS DESDE PHP
 * 
 * Script sencillo para enviar datos de un formulario
 * por correo mediante MAIL de PHP
 * 
 * @author: Fernando Magrosoto V
 * @copyright: Febrero 2000
 */
 

if(isset($_POST['submit'])){

  $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $ciudad = htmlspecialchars($_POST['ciudad']);
    $comentarios = htmlspecialchars($_POST['comentarios']);
    
    $subject = "Formulario de contacto de PATY BUENO";
    $para = "tucuentadecorreo@valido.ext";
    $de = "direccion@remitente.ext";
    $mensaje = "Alguien ha enviado un formulario.";
    $mensaje .= "\n";
    $mensaje .= "Aquí están los datos: ";
    $mensaje .= "\n\n";
    $mensaje .= "Nombre: ".$nombre."\n";
    $mensaje .= "Correo: ".$correo."\n";
    $mensaje .= "Teléfono: ".$telefono."\n";
    $mensaje .= "Ciudad: ".$ciudad."\n";
    $mensaje .= "Comentarios: ".$comentarios."\n\n";
    $mensaje .= "----------------------\n";
    $mensaje .= "Guarde este correo para futuras revisiones.";
    
    if(mail($para, $subject,$mensaje,"From: $de")){
        header("Location: contacto_confirm.html");
        exit();
    }
    
    // fin

} else {

    echo "No se ha enviado ningún form";

}

?>