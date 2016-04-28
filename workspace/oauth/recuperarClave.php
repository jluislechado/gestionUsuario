<?php
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion=new Session();
$email=Request::post('email');

//Compruebo si existe algún usuario con ese email ya registrado
$usuario=$gestor->get($email);

if($usuario==""){
    header("Location:../php/noInsertado.php?error=nanai");
}else{
        $origen='jluislechado@gmail.com';
        $destino=$email;
        $sha1=sha1($destino.Constant::SEMILLA);
        $asunto='Recuperación de clave';
        $mensaje="Pinche el siguiente enlace para modificar su contraseña: "."https://practica-usuario-jluis-mmarjusticia.c9users.io/php/nuevaClave.php?email=$destino&sha1=$sha1";
        require_once '../clases/Google/autoload.php';
        require_once '../clases/class.phpmailer.php';  //las últimas versiones también vienen con autoload
        $cliente = new Google_Client();
        $cliente->setApplicationName('EnviarCorreo');
        $cliente->setClientId('115672413596-eebnhh7vaacu32dgrem7g1ir672u7n62.apps.googleusercontent.com');
        $cliente->setClientSecret('isA8kjzaHQ54j5ESHcZFn9G7');
        $cliente->setRedirectUri('https://practica-usuario-jluis-mmarjusticia.c9users.io/oauth/guardar.php');
        $cliente->setScopes('https://www.googleapis.com/auth/gmail.compose');
        $cliente->setAccessToken(file_get_contents('token.conf'));
        if ($cliente->getAccessToken()) {
            $service = new Google_Service_Gmail($cliente);
            try {
                    $mail = new PHPMailer();
                    $mail->CharSet = "UTF-8";
                    $mail->From = $origen;
                    $mail->FromName = $alias;
                    $mail->AddAddress($destino);
                    $mail->AddReplyTo($origen, $alias);
                    $mail->Subject = $asunto;
                    $mail->Body = $mensaje;
                    $mail->preSend();
                    $mime = $mail->getSentMIMEMessage();
                    $mime = rtrim(strtr(base64_encode($mime), '+/', '-_'), '=');
                    $mensaje = new Google_Service_Gmail_Message();
                    $mensaje->setRaw($mime);
                    $service->users_messages->send('me', $mensaje);
                    header("Location:../php/noInsertado.php?error=exito");
            } catch (Exception $e) {
                    print($e->getMessage());
                }
        }else{
            echo '¡Error! No se ha realizado el envío. Inténtelo de nuevo';
        }
    }
