<?php 
require '../clases/AutoCarga.php';
$bd= new DataBase();
$gestor= new ManageUsuario($bd);
$email=Request::post('email');
$contrasena=Request::post('contrasena');
$repeticion=Request::post('repeticion');
//Compruebo si existe algún usuario con ese email ya registrado
$comprobacionEmail=$gestor->get($email);
if($comprobacionEmail==null){
    header("Location:noInsertado.php?error=email");
}else{
    //Compruebo si las contraseñas introducidas coinciden
    if($contrasena!=$repeticion){
        header("Location:noInsertado.php?error=coincidencia");
    }else{
        $alias=$email;
        $destino=$email;
        $claveCifrada=sha1($clave.Constant::SEMILLA);
        $sha1=  sha1($destino.Constant::SEMILLA);
        $fechaAlta=date('Y-m-d');
        $usuario= new Usuario($email,$claveCifrada,$alias,$fechaAlta,1,0,0);
        $gestor->insert($usuario);
        header("Location:insertadoExito.php");
    }
}
?>