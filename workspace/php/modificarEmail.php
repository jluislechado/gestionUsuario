<?php 
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion= new Session();
$usuario=$sesion->get('_usuario');
if($usuario==''){
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
            <h3>Introduzca el nuevo email</h3>
            <form action="../oauth/phpmodificarEmail.php" method="post">
                <input type="email" name="email"/>
                <div class="blanco"></div></br>
                <input type="submit" value="Modificar email" id="botonIndex"/>
            </form>
        </div>
        </br></br></br></br></br>
        <p>*Debe saber que al introducir un nuevo email, ya no podrá utilizar la aplicación desde el email anterior. Sí se mantendrán el resto de sus parámetros, incluído el alias.</p>
    </body>
</html>