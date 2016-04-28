<?php 
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion= new Session();
$usuarioCorrecto=$sesion->get('_usuario');
if($usuarioCorrecto==''){
    header("Location:noInsertado.php?error=usuarioInvalido");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <link rel="stylesheet" href="../estilo/estilo.css"/>
    </head>
    <body>
        <header>
            <img src="../estilo/imagenes/cabecera.jpg" alt="cabecera" id="cabecera"/>
        </header>
        <div class="blanco"></div>
        <div id="formularioIndex" class="alto">
            </br>
            <h3>Inserte su nuevo alias:</h3>
            <form action="phpmodificar.php" method="post">
                <input type="text" name="alias"/></br></br>
                <div class="blanco"></div>
                <input type="submit" value="Modificar alias" id="botonIndex"/></br>
            </form>
        </div>
    </body>
</html>