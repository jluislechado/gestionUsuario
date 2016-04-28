<?php
    require '../clases/AutoCarga.php';
    $sesion= new Session();
    $usuarioCorrecto=$sesion->get('_usuario');
    if($usuarioCorrecto->getPersonal()!=1){
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
        <div id="formularioIndex" class="alto"></br>
            <form action="phpaltaTrabajador.php" method="post">
                <span>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="email" name="email" placeholder="email"/></br>
                <span>Alias: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="alias" placeholder="alias"/></br>  
                <span>Contraseña: </span><input type="password" name="contrasena" placeholder="contraseña"/></br>
                <input type="submit" value="Dar de alta" id="botonIndex"/>
            </form>
        </div>
        <a href="trabajador.php">Volver</a>
    </body>
</html>