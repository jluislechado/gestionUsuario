<?php
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion=new Session();
$email=Request::post('email');
$contrasena=Request::post('contrasena');
$repeticion=Request::post('repeticion');
//Compruebo si existe algún usuario con ese email ya registrado
$comprobacionEmail=$gestor->get($email);
if($comprobacionEmail!=""){
    header("Location:../php/noInsertado.php?error=email");
}else{
    //Compruebo si las contraseñas introducidas coinciden
    if($contrasena!=$repeticion){
        header("Location:../php/noInsertado.php?error=coincidencia");
    }else{
        $alias=$email;
        $destino=$email;
        $claveCifrada=sha1($contrasena.Constant::SEMILLA);
        $sha1=  sha1($destino.Constant::SEMILLA);
        $fechaAlta=date('Y-m-d');
        $usuario= new Usuario($email,$claveCifrada,$alias,$fechaAlta,0,0,0);
        $gestor->insert($usuario);

        $origen='jluislechado@gmail.com';
        $alias=$email;
        $destino=$email;
        $asunto='Registro';
        $mensaje="Pinche el siguiente enlace para confirmar su registro: "."https://practica-usuario-jluis-mmarjusticia.c9users.io/oauth/activar.php?email=$destino&sha1=$sha1";
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
}