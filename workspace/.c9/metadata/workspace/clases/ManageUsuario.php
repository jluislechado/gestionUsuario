{"filter":false,"title":"ManageUsuario.php","tooltip":"/clases/ManageUsuario.php","undoManager":{"mark":29,"position":29,"stack":[[{"start":{"row":37,"column":0},"end":{"row":47,"column":5},"action":"remove","lines":["      function getListOrder($orden='email',$criterio='asc',$pagina=1, $nrpp=Constant::NRPP){","         $registroInicial = ($pagina-1)*$nrpp;","         $this->bd->select2($this->tabla, \"*\", \"1=1\", array(), $orden,$criterio,\"\" ,$registroInicial, $nrpp);","         $r=array();","         while($fila =$this->bd->getRow()){","             $usuario = new Usuario();","             $usuario->set($fila);","             $r[]=$usuario;","         }","         return $r;","    }"],"id":2}],[{"start":{"row":36,"column":4},"end":{"row":37,"column":0},"action":"remove","lines":["",""],"id":3}],[{"start":{"row":37,"column":0},"end":{"row":47,"column":5},"action":"remove","lines":["        function getListProyeccion($proyeccion,$orden,$criterio,$pagina=1, $nrpp=Constant::NRPP){","         $registroInicial = ($pagina-1)*$nrpp;","         $this->bd->select($this->tabla, $proyeccion, \"1=1\", array(), $orden,$criterio, \"$registroInicial, $nrpp\");","         $r=array();","         while($fila =$this->bd->getRow()){","             $usuario = new Usuario();","             $usuario->set($fila);","             $r[]=$usuario;","         }","         return $r;","    }"],"id":4}],[{"start":{"row":36,"column":4},"end":{"row":37,"column":0},"action":"remove","lines":["",""],"id":5}],[{"start":{"row":37,"column":8},"end":{"row":37,"column":12},"action":"remove","lines":["    "],"id":6}],[{"start":{"row":37,"column":4},"end":{"row":37,"column":8},"action":"remove","lines":["    "],"id":7}],[{"start":{"row":25,"column":67},"end":{"row":25,"column":68},"action":"remove","lines":["F"],"id":8}],[{"start":{"row":25,"column":67},"end":{"row":25,"column":68},"action":"insert","lines":["P"],"id":9}],[{"start":{"row":37,"column":97},"end":{"row":37,"column":98},"action":"remove","lines":["F"],"id":10}],[{"start":{"row":37,"column":97},"end":{"row":37,"column":98},"action":"insert","lines":["P"],"id":11}],[{"start":{"row":27,"column":72},"end":{"row":27,"column":73},"action":"remove","lines":["l"],"id":12}],[{"start":{"row":27,"column":71},"end":{"row":27,"column":72},"action":"remove","lines":["i"],"id":13}],[{"start":{"row":27,"column":70},"end":{"row":27,"column":71},"action":"remove","lines":["a"],"id":14}],[{"start":{"row":27,"column":69},"end":{"row":27,"column":70},"action":"remove","lines":["m"],"id":15}],[{"start":{"row":27,"column":68},"end":{"row":27,"column":69},"action":"remove","lines":["e"],"id":16}],[{"start":{"row":27,"column":68},"end":{"row":27,"column":69},"action":"insert","lines":["a"],"id":17}],[{"start":{"row":27,"column":69},"end":{"row":27,"column":70},"action":"insert","lines":["l"],"id":18}],[{"start":{"row":27,"column":70},"end":{"row":27,"column":71},"action":"insert","lines":["i"],"id":19}],[{"start":{"row":27,"column":71},"end":{"row":27,"column":72},"action":"insert","lines":["a"],"id":20}],[{"start":{"row":27,"column":72},"end":{"row":27,"column":73},"action":"insert","lines":["s"],"id":21}],[{"start":{"row":27,"column":79},"end":{"row":27,"column":80},"action":"remove","lines":["s"],"id":22}],[{"start":{"row":27,"column":78},"end":{"row":27,"column":79},"action":"remove","lines":["a"],"id":23}],[{"start":{"row":27,"column":77},"end":{"row":27,"column":78},"action":"remove","lines":["i"],"id":24}],[{"start":{"row":27,"column":76},"end":{"row":27,"column":77},"action":"remove","lines":["l"],"id":25}],[{"start":{"row":27,"column":75},"end":{"row":27,"column":76},"action":"remove","lines":["a"],"id":26}],[{"start":{"row":27,"column":75},"end":{"row":27,"column":76},"action":"insert","lines":["e"],"id":27}],[{"start":{"row":27,"column":76},"end":{"row":27,"column":77},"action":"insert","lines":["m"],"id":28}],[{"start":{"row":27,"column":77},"end":{"row":27,"column":78},"action":"insert","lines":["a"],"id":29}],[{"start":{"row":27,"column":78},"end":{"row":27,"column":79},"action":"insert","lines":["i"],"id":30}],[{"start":{"row":27,"column":79},"end":{"row":27,"column":80},"action":"insert","lines":["l"],"id":31}]]},"ace":{"folds":[],"scrolltop":352,"scrollleft":0,"selection":{"start":{"row":27,"column":80},"end":{"row":27,"column":80},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1453026635211,"hash":"70985e252fb80a7d058e34784a65d563586c4908"}