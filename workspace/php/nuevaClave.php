<?php
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$email=Request::get('email');
$sha1=Request::get('sha1');
$emailCifrado=sha1($email.Constant::SEMILLA);
if($emailCifrado==$sha1){
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
        <div id="formularioIndex">
            <form action="phpnuevaClave.php" method="post"></br>
                <span>Nueva contraseña: </span><input type="password" name="contrasena" placeholder="contraseña"/></br>  
                <span>Repita su nueva contraseña: </span><input type="password" name="repeticion" placeholder="repetición"/></br></br>
                <input type="hidden" name="email" value=<?php echo $email;?> />
                <input type="submit" value="Modificar contraseña" id="botonIndex"/>
            </form>
        </div>
    </body>
</html>
<?php }else{
    header("Location:../php/noInsertado?error=error");
}