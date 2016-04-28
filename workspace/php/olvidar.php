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
            <form action="../oauth/recuperarClave.php" method="post">
                <span>Introduzca su email: </span><input type="email" name="email" placeholder="email"/></br></br>  
                <input type="submit" value="Recuperar contraseña" id="botonIndex"/>
            </form>
        </div>
    </body>
</html>