<?php 
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion= new Session();
$usuarioCorrecto=$sesion->get('_usuario');
if($usuarioCorrecto==''){
    header("Location:noInsertado.php?error=usuarioInvalido");
}
if($usuarioCorrecto->getAdministrador()!=1&&$usuarioCorrecto->getPersonal()!=1){
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
        <h3>Inserte su nuevo alias:</h3>
        <form action="phpmodificarTrabajador.php" method="post">
            <input type="text" name="alias"/>
            <input type="submit" value="Modificar alias"/>
        </form>
    </body>
</html>