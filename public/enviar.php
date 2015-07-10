<?php

date_default_timezone_set('Etc/UTC');

require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sistemas@zebrastudio.co';                 // SMTP username
$mail->Password = 'sistemas2015@';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'info@zebrastudio.co';
$mail->FromName = 'Mailer';
$mail->addAddress('info@zebrastudio.co', 'Joe User');     // Add a recipient
$mail->addAddress('info@zebrastudio.co');               // Name is optional
$mail->addReplyTo('sistemas@zebrastudio.co', 'Information');
$mail->addCC('sistemas@zebrastudio.co');
$mail->addBCC('sistemas@zebrastudio.co');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '<h1>Correo de zebra studio</h1>
            <table>
                <tbody>
                    <tr>
                        <td>Nombre:</td>
                        <td>'.$_POST['nombre'].'</td>
                    </tr>
                    <tr>
                        <td>Apellido:</td>
                        <td>'.$_POST['apellido'].'</td>
                    </tr>
                    <tr>
                        <td>Organizacion:</td>
                        <td>'.$_POST['organizacion'].'</td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td>'.$_POST['telefono'].'</td>
                    </tr>
                    <tr>
                        <td>Celular:</td>
                        <td>'.$_POST['celular'].'</td>
                    </tr>
                    <tr>
                        <td>Correo:</td>
                        <td>'.$_POST['correo'].'</td>
                    </tr>
                    <tr>
                        <td>Mensaje:</td>
                        <td>'.$_POST['mensaje'].'</td>
                    </tr>
                </tbody>
            </table>
               ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$enviar=new enviar();
if(!$mail->send()) {
    $enviar->sendMessaje("El correo no fue enviado");
    header('location:contactenos.php');
} else {
   $enviar->sendMessaje('El correo fue enviado correctemente');
    header('location:contactenos.php');
}

class enviar{
    private $mensaje;
    public function sendMessaje($mensaje)
    {
        $this->mensaje=$mensaje;
    }
    public function getMessage()
    {
        return $this->mensaje;
    }

}