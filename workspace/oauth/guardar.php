<?php

session_start();

require_once '../clases/Google/autoload.php';

$cliente = new Google_Client();

$cliente->setApplicationName('EnviarCorreo');

$cliente->setClientId('115672413596-eebnhh7vaacu32dgrem7g1ir672u7n62.apps.googleusercontent.com'); 

$cliente->setClientSecret('isA8kjzaHQ54j5ESHcZFn9G7');

$cliente->setRedirectUri('https://practica-usuario-jluis-mmarjusticia.c9users.io/oauth/guardar.php');

$cliente->setScopes('https://mail.google.com/');


$cliente->setAccessType('offline');


if (isset($_GET['code'])) {

   $cliente->authenticate($_GET['code']);

   $_SESSION['token'] = $cliente->getAccessToken();

   $archivo = "token.conf";

   $fh = fopen($archivo, 'w') or die("error");

   fwrite($fh, $cliente->getAccessToken()); 
   fclose($fh);

}