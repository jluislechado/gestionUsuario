<?php
require '../clases/AutoCarga.php';
$sesion= new Session();
$usuario=$sesion->get('_usuario');
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
        <div class="mensaje">Insertado con éxito</div>
    </body>
</html>