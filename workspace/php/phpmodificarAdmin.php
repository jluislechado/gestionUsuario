<?php 
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$sesion= new Session();
$usuario=$sesion->get('_usuario');
if($usuario==''){
    header("Location:noInsertado.php?error=usuarioInvalido");
}else{
        $alias=Request::post('alias');
        $usuarioExistente=$gestor->getByAlias($alias);
        if($usuarioExistente==''){
            $email=$usuario->getEmail();
            $clave=$usuario->getClave();
            $fechaAlta=$usuario->getFechaAlta();
            $activo=$usuario->getActivo();
            $administrador=$usuario->getAdministrador();
            $trabajador=$usuario->getPersonal();
            $usuario2=new Usuario($email,$clave,$alias,$fechaAlta,$activo,$administrador,$trabajador);
            $gestor->set($usuario2);
            $sesion->set('_usuario',$usuario2);
            header("Location:administrador.php");
        }else{
            header("Location:noInsertado.php?error=aliasExistente");
        }
}