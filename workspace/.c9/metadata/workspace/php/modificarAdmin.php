{"filter":false,"title":"modificarAdmin.php","tooltip":"/php/modificarAdmin.php","undoManager":{"mark":74,"position":74,"stack":[[{"start":{"row":0,"column":0},"end":{"row":25,"column":7},"action":"insert","lines":["<?php ","require '../clases/AutoCarga.php';","$bd= new DataBase();","$gestor= new ManageUsuario($bd);","$sesion= new Session();","$usuarioCorrecto=$sesion->get('_usuario');","if($usuarioCorrecto==''){","    header(\"Location:noInsertado.php?error=usuarioInvalido\");","}","","?>","<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"UTF-8\">","        <title></title>","          <link rel=\"stylesheet\" href=\"../estilo/estilo.css\"/>","    </head>","    <body>","        <h3>Inserte su nuevo alias:</h3>","        <form action=\"phpmodificar.php\" method=\"post\">","            <input type=\"text\" name=\"alias\"/>","            <input type=\"submit\" value=\"Modificar alias\"/>","        </form>","    </body>","</html>"],"id":1}],[{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"insert","lines":["A"],"id":2}],[{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["d"],"id":3}],[{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"insert","lines":["m"],"id":4}],[{"start":{"row":20,"column":37},"end":{"row":20,"column":38},"action":"insert","lines":["i"],"id":5}],[{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"insert","lines":["n"],"id":6}],[{"start":{"row":8,"column":1},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":7}],[{"start":{"row":9,"column":0},"end":{"row":11,"column":1},"action":"insert","lines":["if($usuarioCorrecto->getAdministrador()!=1){","    header(\"Location:noInsertado.php?error=usuarioInvalido\");","}"],"id":8}],[{"start":{"row":11,"column":1},"end":{"row":12,"column":0},"action":"remove","lines":["",""],"id":9}],[{"start":{"row":20,"column":10},"end":{"row":21,"column":8},"action":"insert","lines":["","        "],"id":10}],[{"start":{"row":21,"column":8},"end":{"row":23,"column":17},"action":"insert","lines":["<header>","            <img src=\"../estilo/imagenes/cabecera.jpg\" alt=\"cabecera\" id=\"cabecera\"/>","        </header>"],"id":11}],[{"start":{"row":23,"column":17},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":24,"column":0},"end":{"row":24,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":24,"column":8},"end":{"row":25,"column":38},"action":"insert","lines":["<div class=\"blanco\"></div>","            <div id=\"formularioIndex\">"],"id":13}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":12},"action":"remove","lines":["    "],"id":14}],[{"start":{"row":30,"column":15},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":31,"column":0},"end":{"row":31,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":31,"column":8},"end":{"row":31,"column":9},"action":"insert","lines":["<"],"id":16}],[{"start":{"row":31,"column":9},"end":{"row":31,"column":10},"action":"insert","lines":["/"],"id":17}],[{"start":{"row":31,"column":10},"end":{"row":31,"column":11},"action":"insert","lines":["d"],"id":18}],[{"start":{"row":31,"column":11},"end":{"row":31,"column":12},"action":"insert","lines":["i"],"id":19}],[{"start":{"row":31,"column":12},"end":{"row":31,"column":13},"action":"insert","lines":["v"],"id":20}],[{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"insert","lines":[">"],"id":21}],[{"start":{"row":26,"column":8},"end":{"row":26,"column":12},"action":"insert","lines":["    "],"id":22}],[{"start":{"row":27,"column":8},"end":{"row":27,"column":12},"action":"insert","lines":["    "],"id":23}],[{"start":{"row":28,"column":12},"end":{"row":28,"column":16},"action":"insert","lines":["    "],"id":24}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":16},"action":"insert","lines":["    "],"id":25}],[{"start":{"row":30,"column":8},"end":{"row":30,"column":12},"action":"insert","lines":["    "],"id":26}],[{"start":{"row":25,"column":34},"end":{"row":26,"column":12},"action":"insert","lines":["","            "],"id":27}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":17},"action":"insert","lines":["</br>"],"id":28}],[{"start":{"row":29,"column":49},"end":{"row":29,"column":54},"action":"insert","lines":["</br>"],"id":29}],[{"start":{"row":30,"column":62},"end":{"row":30,"column":67},"action":"insert","lines":["</br>"],"id":30}],[{"start":{"row":30,"column":60},"end":{"row":30,"column":61},"action":"insert","lines":[" "],"id":31}],[{"start":{"row":30,"column":61},"end":{"row":30,"column":62},"action":"insert","lines":["i"],"id":32}],[{"start":{"row":30,"column":62},"end":{"row":30,"column":63},"action":"insert","lines":["d"],"id":33}],[{"start":{"row":30,"column":63},"end":{"row":30,"column":64},"action":"insert","lines":["="],"id":34}],[{"start":{"row":30,"column":64},"end":{"row":30,"column":65},"action":"insert","lines":["\""],"id":35}],[{"start":{"row":30,"column":65},"end":{"row":30,"column":66},"action":"insert","lines":["\""],"id":36}],[{"start":{"row":30,"column":65},"end":{"row":30,"column":66},"action":"insert","lines":["b"],"id":37}],[{"start":{"row":30,"column":66},"end":{"row":30,"column":67},"action":"insert","lines":["p"],"id":38}],[{"start":{"row":30,"column":67},"end":{"row":30,"column":68},"action":"insert","lines":["y"],"id":39}],[{"start":{"row":30,"column":68},"end":{"row":30,"column":69},"action":"insert","lines":["p"],"id":40}],[{"start":{"row":30,"column":69},"end":{"row":30,"column":70},"action":"insert","lines":["m"],"id":41}],[{"start":{"row":30,"column":69},"end":{"row":30,"column":70},"action":"remove","lines":["m"],"id":42}],[{"start":{"row":30,"column":68},"end":{"row":30,"column":69},"action":"remove","lines":["p"],"id":43}],[{"start":{"row":30,"column":67},"end":{"row":30,"column":68},"action":"remove","lines":["y"],"id":44}],[{"start":{"row":30,"column":66},"end":{"row":30,"column":67},"action":"remove","lines":["p"],"id":45}],[{"start":{"row":30,"column":66},"end":{"row":30,"column":67},"action":"insert","lines":["o"],"id":46}],[{"start":{"row":30,"column":67},"end":{"row":30,"column":68},"action":"insert","lines":["t"],"id":47}],[{"start":{"row":30,"column":68},"end":{"row":30,"column":69},"action":"insert","lines":["o"],"id":48}],[{"start":{"row":30,"column":69},"end":{"row":30,"column":70},"action":"insert","lines":["n"],"id":49}],[{"start":{"row":30,"column":70},"end":{"row":30,"column":71},"action":"insert","lines":["I"],"id":50}],[{"start":{"row":30,"column":71},"end":{"row":30,"column":72},"action":"insert","lines":["n"],"id":51}],[{"start":{"row":30,"column":72},"end":{"row":30,"column":73},"action":"insert","lines":["d"],"id":52}],[{"start":{"row":30,"column":73},"end":{"row":30,"column":74},"action":"insert","lines":["e"],"id":53}],[{"start":{"row":30,"column":74},"end":{"row":30,"column":75},"action":"insert","lines":["x"],"id":54}],[{"start":{"row":29,"column":54},"end":{"row":29,"column":59},"action":"insert","lines":["</br>"],"id":55}],[{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"insert","lines":["3"],"id":56}],[{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"remove","lines":["3"],"id":57}],[{"start":{"row":25,"column":31},"end":{"row":25,"column":32},"action":"remove","lines":["x"],"id":58}],[{"start":{"row":25,"column":31},"end":{"row":25,"column":32},"action":"insert","lines":["x"],"id":59}],[{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"insert","lines":["3"],"id":60}],[{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"remove","lines":["3"],"id":61}],[{"start":{"row":25,"column":33},"end":{"row":25,"column":34},"action":"insert","lines":[" "],"id":62}],[{"start":{"row":25,"column":34},"end":{"row":25,"column":35},"action":"insert","lines":["c"],"id":63}],[{"start":{"row":25,"column":35},"end":{"row":25,"column":36},"action":"insert","lines":["l"],"id":64}],[{"start":{"row":25,"column":36},"end":{"row":25,"column":37},"action":"insert","lines":["a"],"id":65}],[{"start":{"row":25,"column":37},"end":{"row":25,"column":38},"action":"insert","lines":["s"],"id":66}],[{"start":{"row":25,"column":38},"end":{"row":25,"column":39},"action":"insert","lines":["s"],"id":67}],[{"start":{"row":25,"column":39},"end":{"row":25,"column":40},"action":"insert","lines":["="],"id":68}],[{"start":{"row":25,"column":40},"end":{"row":25,"column":42},"action":"insert","lines":["\"\""],"id":69}],[{"start":{"row":25,"column":41},"end":{"row":25,"column":42},"action":"insert","lines":["a"],"id":70}],[{"start":{"row":25,"column":42},"end":{"row":25,"column":43},"action":"insert","lines":["l"],"id":71}],[{"start":{"row":25,"column":43},"end":{"row":25,"column":44},"action":"insert","lines":["t"],"id":72}],[{"start":{"row":25,"column":44},"end":{"row":25,"column":45},"action":"insert","lines":["o"],"id":73}],[{"start":{"row":29,"column":59},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":74},{"start":{"row":30,"column":0},"end":{"row":30,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":30,"column":16},"end":{"row":30,"column":42},"action":"insert","lines":["<div class=\"blanco\"></div>"],"id":75}]]},"ace":{"folds":[],"scrolltop":87,"scrollleft":0,"selection":{"start":{"row":21,"column":8},"end":{"row":24,"column":34},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1453051998573,"hash":"03119b87a06a39a6cdf9e86fdfb8b8953806a2c2"}