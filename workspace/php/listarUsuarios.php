<?php 
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion= new Session();
$usuario=$sesion->get('_usuario');
if($usuario==''){
    header("Location:noInsertado.php?error=usuarioInvalido");
}
if($usuario->getAdministrador()!=1&&$usuario->getPersonal()!=1){
    header("Location:noInsertado.php?error=usuarioInvalido");
}
$pagina=1;
$nrpp=  Constant::NRPP;
$condicion='personal=0 and administrador=0';
$usuarios=$gestor->getListWhere($condicion);
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
        <div id="h1">LISTADO DE USUARIOS</div>
        <div class="blanco"></div>
        <table id="tabla1" border="1">
            <thead>
            <th>Alias</th>
            <th>Email</th>
            <th>Fecha de alta</th>
            <th>activo</th>
            </thead>
        <?php
        foreach ($usuarios as $key => $value) {?>
            <tr>
                <td><?=$value->getAlias();?></td>
                <td><?=$value->getEmail();?></td>
                <td><?=$value->getFechaAlta();?></td>
                <td><?=$value->getActivo();?></td>
                <td>
                    <a class='borrar' href='deleteUsuario.php?email=<?= $value->getEmail() ?>'>Borrar</a>
                </td>
             </tr>
        <?php }?>
        </table>
        </br>
        <a href='
            <?php 
                if($usuario->getAdministrador()==1){
                    echo 'administrador.php';
                }else{
                    echo 'trabajador.php';
                }
            ?>
        '>Volver</a>
    </body>
</html>



