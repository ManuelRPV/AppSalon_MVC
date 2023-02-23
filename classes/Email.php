<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;


class Email
{
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }
    public function enviarConfirmacion()
    {
        //Crear el objeto de Email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '69b6e8a367f6bf';
        $mail->Password = '19f81cc1316a43';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Confirma tu cuenta';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';
        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong>. Has creado tu cuenta en App Salon, solo debes confirmarla presionando el siguiente enlace:</p>";
        $contenido .= "<p> Presiona aqui: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'> Confirmar Cuenta </a> </p>";
        $contenido .= "<p> Si tu no solicitaste esta cuenta, puedes ignorar el mensaje </p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }

    public function enviarInstrucciones()
    {
        //Crear el objeto de Email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '69b6e8a367f6bf';
        $mail->Password = '19f81cc1316a43';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Reestablece tu contraseña';

        //Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';
        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong>. Has solicitado reestablecer tu contraseña. Sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p> Presiona aqui: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'> Reestablecer contraseña </a> </p>";
        $contenido .= "<p> Si tu no solicitaste este cambio, puedes ignorar el mensaje </p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }
}
