{"filter":false,"title":"deleteUsuario.php","tooltip":"/php/deleteUsuario.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":13,"column":2},"action":"insert","lines":["<?php","require '../clases/AutoCarga.php';","$bd=new DataBase();","$gestor=new ManageUsuario($bd);","$email=  Request::get(\"email\");","$r=$gestor->delete($email);","if($r==false){","    echo 'ha habido un error';","}","else{","    header(\"location:correctoUsuario.php\");","};","","?>"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":1,"column":0},"end":{"row":1,"column":34},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1453054496000,"hash":"c5099ed5e00285214dc5e6dd0622f4ec9246d69b"}