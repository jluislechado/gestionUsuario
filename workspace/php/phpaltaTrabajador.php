<?php 
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$email=Request::post('email');
$alias=Request::post('alias');
$contrasena=Request::post('contrasena');
$contrasenaC=sha1($contrasena.Constant::SEMILLA);
$trabajador=Request::post('trabajador');
$fechaAlta=date('Y-m-d');
$user=$gestor->get($email);
$user2=$gestor->getByAlias($alias);
if($user2==''){
    if($user==''){
        $usuario=new Usuario($email,$contrasenaC,$alias,$fechaAlta,1,0,0);
        $gestor->insert($usuario);
        header("Location:insertado.php");
    }else{
       header("Location:noInsertado.php?error=email"); 
    }
}else{
    header("Location:noInsertado.php?error=alias");
}