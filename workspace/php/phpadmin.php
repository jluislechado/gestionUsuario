<?php 
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion= new Session();
//Recojo los valores introducidos por el usuario
$alias=Request::post('alias');
$contrasena=Request::post('contrasena');
$contrasenaCifrada=sha1($contrasena.Constant::SEMILLA);
//Buscamos el usuario de la base de datos que tiene el alias introducido
$usuario=$gestor->getByAlias($alias);
if($usuario==''){
    header("Location:noInsertado.php?error=alias");
}else{
    if($usuario->getActivo()!=1){
       header("Location:noInsertado.php?error=activo"); 
    }else{
        //Obtengo la contraseña del usuario con el alias introducido almacenada en la BD
        $contrasenaAlmacenada=$usuario->getClave();
        //Compruebo si las contraseñas coinciden y caso afirmativo se permite el acceso
        if($contrasenaCifrada==$contrasenaAlmacenada){
            $sesion->set('_usuario',$usuario);
            header("Location:administrador.php");
        }else{
            header("Location:noInsertado.php?error=login");
        }
    }
}