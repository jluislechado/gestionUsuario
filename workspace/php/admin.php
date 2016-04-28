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
        <div id="formularioIndex">
            <form action="phpadmin.php" method="post">
                </br>
                <span>Administrador: </span><input type="text" name="alias" placeholder="usuario"/></br>  
                <span>Contraseña: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="password" name="contrasena" placeholder="contraseña"/></br></br>
                <input type="submit" value="Entrar" id="botonIndex"/>
            </form>
        </div>
        <div id="enlacesIndex">
            </br>
            <a href="olvidar.php">¿Olvidaste tu contraseña?</a>
        </div>
    </body>
</html>