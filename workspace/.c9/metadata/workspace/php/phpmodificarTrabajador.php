{"filter":false,"title":"phpmodificarTrabajador.php","tooltip":"/php/phpmodificarTrabajador.php","undoManager":{"mark":12,"position":12,"stack":[[{"start":{"row":0,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["<?php ","require '../clases/AutoCarga.php';","$bd= new DataBase();","$gestor= new ManageUsuario($bd);","$sesion= new Session();","$usuario=$sesion->get('_usuario');","if($usuario==''){","    header(\"Location:noInsertado.php?error=usuarioInvalido\");","}else{","        $alias=Request::post('alias');","        $usuarioExistente=$gestor->getByAlias($alias);","        if($usuarioExistente==''){","            $email=$usuario->getEmail();","            $clave=$usuario->getClave();","            $fechaAlta=$usuario->getFechaAlta();","            $activo=$usuario->getActivo();","            $administrador=$usuario->getAdministrador();","            $trabajador=$usuario->getPersonal();","            $usuario2=new Usuario($email,$clave,$alias,$fechaAlta,$activo,$administrador,$trabajador);","            $gestor->set($usuario2);","            $sesion->set('_usuario',$usuario2);","            header(\"Location:administrador.php\");","        }else{","            header(\"Location:noInsertado.php?error=aliasExistente\");","        }","}"],"id":1}],[{"start":{"row":21,"column":29},"end":{"row":21,"column":42},"action":"remove","lines":["administrador"],"id":2},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"insert","lines":["t"]}],[{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"insert","lines":["r"],"id":3}],[{"start":{"row":21,"column":31},"end":{"row":21,"column":32},"action":"insert","lines":["a"],"id":4}],[{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"insert","lines":["b"],"id":5}],[{"start":{"row":21,"column":33},"end":{"row":21,"column":34},"action":"insert","lines":["a"],"id":6}],[{"start":{"row":21,"column":34},"end":{"row":21,"column":35},"action":"insert","lines":["j"],"id":7}],[{"start":{"row":21,"column":35},"end":{"row":21,"column":36},"action":"insert","lines":["a"],"id":8}],[{"start":{"row":21,"column":36},"end":{"row":21,"column":37},"action":"insert","lines":["d"],"id":9}],[{"start":{"row":21,"column":37},"end":{"row":21,"column":38},"action":"insert","lines":["o"],"id":10}],[{"start":{"row":21,"column":38},"end":{"row":21,"column":39},"action":"insert","lines":["r"],"id":11}],[{"start":{"row":21,"column":39},"end":{"row":21,"column":40},"action":"insert","lines":["e"],"id":12}],[{"start":{"row":21,"column":39},"end":{"row":21,"column":40},"action":"remove","lines":["e"],"id":13}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":39},"end":{"row":21,"column":39},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1453032789826,"hash":"dca8dd9223f2ec42742aeaf8594dff36c1f87ee4"}