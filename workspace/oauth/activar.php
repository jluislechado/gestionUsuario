<?php
require '../clases/AutoCarga.php';
$bd=new DataBase();
$gestor=new ManageUsuario($bd);
$email=Request::get('email');
$sha1=Request::get('sha1');
$emailCifrado=sha1($email.Constant::SEMILLA);
if($emailCifrado==$sha1){
    $usuario=$gestor->get($email);
    $alias=$usuario->getAlias();
    $clave=$usuario->getClave();
    $fechaAlta=$usuario->getFechaAlta();
    $activo=1;
    $administrador=$usuario->getAdministrador();
    $trabajador=$usuario->getPersonal();
    $usuario2=new Usuario($email,$clave,$alias,$fechaAlta,$activo,$administrador,$trabajador);
    $gestor->set($usuario2);
    header("Location:../php/index.php?r=1");
}else{
    header("Location:../php/noInsertado?error=error");
}