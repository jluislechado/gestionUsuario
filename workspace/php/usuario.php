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
        <div id="h1">ÁREA DE USUARIO</div>
        <div class="blanco"></div>
        <div id="formularioIndex2">
            <h3>Mis datos</h3>
            <span>Alias: &nbsp;&nbsp;&nbsp;<?php echo $usuarioCorrecto->getAlias();?></span>
            </br>
            <span>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $usuarioCorrecto->getEmail();?></span>
            </br>
        </div>
        <div id="ladoDerecho">
            <div class="usuario">
                <a href="modificar.php">Modificar mi alias</a>
            </div>
            <div class="usuario">
                <a href="olvidar.php">Modificar mi contraseña</a>
            </div>
            <div class="usuario">
                <a href="modificarEmail.php">Modificar mi email</a>
            </div>
            <div class="usuario">
                <a href="cerrarSesion.php">Cerrar sesión</a>
            </div>
        </div>
    </body>
</html>