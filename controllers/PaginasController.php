<?php

namespace Controllers;
use MVC\Router;
use Model\Prensa;
use Model\Empresas;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index( Router $router ) {

        $prensa = Prensa::all();

        $router->render('paginas/index', [
            'inicio' => true,
            'prensa' => $prensa
        ]);
    }

    public static function notasprensa( Router $router ) {
        $prensa = Prensa::all();
        $router->render('paginas/prensa', [
            'prensa' => $prensa
        ]);
    }

    public static function notaprensa(Router $router) {
        $id = validarORedireccionar('/notasprensa');
        $prensa = Prensa::find($id);
        $router->render('paginas/nota', [
            'prensa' => $prensa
        ]);        
    }

    public static function contacto( Router $router ) {

        $mensaje = null;
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $respuestas = $_POST['contacto'];

            //Crear una instancia de PHPMailer
            $mail = new PHPMailer();

            // configurar SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '62dadc31ac512d';
            $mail->Password = 'c6b5e8e8b84ba8';
            $mail->SMTPSecure = 'tls';
            //$mail->Port = 2525;

            //Contenido del mail
            $mail->setFrom('admin@bienesraices.com', $respuestas['nombre']);
            $mail->addAddress('cousillas.rodrigo@gmail.com', 'Cou and Cou');
            $mail->Subject = 'Tienes un Nuevo Email';
            // Set HTML 
            $mail->isHTML(TRUE);
            $mail->CharSet = 'UTF-8'; 

            $contenido='<html>';
            $contenido .='<p>Tienes un nuevo mail</p></html>';
            $contenido .='<p>Región: ' . $respuestas['region'] . '</p>';
            $contenido .='<p>Nombre: ' . $respuestas['name'] . '</p>';
            $contenido .='<p>Apellido: ' . $respuestas['lastname'] . '</p>';
            $contenido .='<p>Email: ' . $respuestas['email'] . '</p>';
            $contenido .='<p>País: ' . $respuestas['pais'] . '</p>';
            $contenido .='<p>Empresa: ' . $respuestas['empresa'] . '</p>';
            $contenido .='<p>Ciudad: ' . $respuestas['ciudad'] . '</p>';
            $contenido .='<hr />';
            $contenido .='<p>Mensaje: ' . $respuestas['message'] . '</p>';
            $contenido .='</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo';

            if($mail->send()) {
                $mensaje = "Mensaje enviado correctamente.";
            } else {
                $mensaje = "El mensaje no se pudo enviar.";
            } ;

        }

        $router->render('paginas/contacto', [
            'mensaje' => $mensaje 
        ]);


    }


}