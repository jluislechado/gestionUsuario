<?php
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$contrasena=Request::post('contrasena');
$repeticion=Request::post('repeticion');
if($contrasena==''||$repeticion==''){
    header("Location:noInsertado.php?error=vacio");
}else{
    if($contrasena!=$repeticion){
        header("Location:noInsertado.php?error=coincidencia");
    }else{
        $email=Request::post('email');
        $usuario=$gestor->get($email);
        $alias=$usuario->getAlias();
        $clave=sha1($contrasena.Constant::SEMILLA);
        $fechaAlta=$usuario->getFechaAlta();
        $activo=$usuario->getActivo();
        $administrador=$usuario->getAdministrador();
        $trabajador=$usuario->getPersonal();
        $usuario2=new Usuario($email,$clave,$alias,$fechaAlta,$activo,$administrador,$trabajador);
        $gestor->set($usuario2);
        header("Location:../php/index.php?r=1");
    }
}