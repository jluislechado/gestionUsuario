{"filter":false,"title":"guardar.php","tooltip":"/oauth/guardar.php","undoManager":{"mark":6,"position":6,"stack":[[{"start":{"row":0,"column":0},"end":{"row":35,"column":1},"action":"insert","lines":["<?php","","session_start();","","require_once '../clases/Google/autoload.php';","","$cliente = new Google_Client();","","$cliente->setApplicationName('proyectoEnviarCorreoDesdeGmail');","","$cliente->setClientId('505098225843-sdiumqfakj929lle3rugldjv72ojkpgi.apps.googleusercontent.com'); ","","$cliente->setClientSecret('dvjJ435G5shs2um5ZG_vVeBs');","","$cliente->setRedirectUri('https://practica-listacanciones-mmarjusticia.c9users.io/oauth/guardar.php');","","$cliente->setScopes('https://mail.google.com/');","$cliente->setScopes('https//www.googleaplis.com/auth/gmail.compose');","","$cliente->setAccessType('offline');","","","if (isset($_GET['code'])) {","","   $cliente->authenticate($_GET['code']);","","   $_SESSION['token'] = $cliente->getAccessToken();","","   $archivo = \"token.conf\";","","   $fh = fopen($archivo, 'w') or die(\"error\");","","   fwrite($fh, $cliente->getAccessToken()); ","   fclose($fh);","","}"],"id":1}],[{"start":{"row":10,"column":23},"end":{"row":10,"column":95},"action":"remove","lines":["505098225843-sdiumqfakj929lle3rugldjv72ojkpgi.apps.googleusercontent.com"],"id":2},{"start":{"row":10,"column":23},"end":{"row":10,"column":95},"action":"insert","lines":["115672413596-eebnhh7vaacu32dgrem7g1ir672u7n62.apps.googleusercontent.com"]}],[{"start":{"row":8,"column":30},"end":{"row":8,"column":38},"action":"remove","lines":["proyecto"],"id":3}],[{"start":{"row":8,"column":42},"end":{"row":8,"column":52},"action":"remove","lines":["DesdeGmail"],"id":4}],[{"start":{"row":12,"column":27},"end":{"row":12,"column":51},"action":"remove","lines":["dvjJ435G5shs2um5ZG_vVeBs"],"id":5},{"start":{"row":12,"column":27},"end":{"row":12,"column":51},"action":"insert","lines":["isA8kjzaHQ54j5ESHcZFn9G7"]}],[{"start":{"row":14,"column":26},"end":{"row":14,"column":99},"action":"remove","lines":["https://practica-listacanciones-mmarjusticia.c9users.io/oauth/guardar.php"],"id":6},{"start":{"row":14,"column":26},"end":{"row":14,"column":98},"action":"insert","lines":["https://practica-usuario-jluis-mmarjusticia.c9users.io/oauth/guardar.php"]}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":69},"action":"remove","lines":["$cliente->setScopes('https//www.googleaplis.com/auth/gmail.compose');"],"id":7}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":26},"end":{"row":14,"column":98},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1452363794170,"hash":"e1603266aad87b1e2b48430e2e698fb8d633a0a4"}