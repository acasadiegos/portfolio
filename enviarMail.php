<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST)){

    require_once 'vendor/autoload.php';

    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false; 
    $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : false;

    //Inicia la sesión
    if(!isset($_SESSION)){
        session_start();
    }

    $errores = array();

    if(!empty($nombre) && strlen($nombre) >= 3 && strlen($nombre) <= 50 && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    if(!empty($correo) && strlen($nombre) >= 3 && strlen($nombre) <= 50 && filter_var($correo, FILTER_VALIDATE_EMAIL)){
        $correo_validado = true;
    }else{
        $correo_validado = false;
        $errores['correo'] = "El correo no es válido";
    }

    if(!empty($mensaje)){
        $mensaje_validado = true;
    }else{
        $mensaje_validado = false;
        $errores['mensaje'] = "El mensaje no es válido";
    }

    $enviar_email = false;

    if(count($errores) == 0){

        $enviar_email = true;

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'acasadiego1998@gmail.com';                     // SMTP username
            $mail->Password   = 'jwwbaktsnvvuxlve';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($correo, $nombre);
            $mail->addAddress('acasadiego199827@gmail.com');     // Add a recipient

            // Content
            $mail->isHTML(false);                                  // Set email format to HTML
            $mail->Subject = 'Mensaje desde el portafolio profesional';
            $mail->Body    = $mensaje;
            $mail->AltBody = $mensaje;

            $mail->send();
            
            $_SESSION['completado'] = 'Email sended sucessfully';
            
        } catch (Exception $e) {
            $SESSION['errores']['general'] = 'Ha ocurrido un error al enviar el e-mail';
        }
        
    }else{
        $_SESSION['errores'] = $errores;
    }

    header("Location: index.php");
}
