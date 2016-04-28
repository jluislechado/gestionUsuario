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
        <div class="mensaje">
            <?php
                require '../clases/AutoCarga.php';
                $error=Request::get('error');
                if($error=='exito'){
                    echo 'Por motivos de seguridad, confirme su registro en su email personal, gracias.';
                }else{
                    if($error=='email'){
                        echo '¡Error! Ya existe un usuario registrado en la BD con el email introducido';
                    }else{
                        if($error=='coincidencia'){
                            echo '¡Error! Las contraseñas introducidas no coinciden';
                        }else{
                            if($error=='error'){
                                echo '¡Error! No se ha podido realizar el registro. Inténtelo de nuevo';
                            }else{
                                if($error=='login'){
                                    echo '¡Error! La contraseña introducida no es correcta';
                                }else{
                                    if($error=='alias'){
                                        echo '¡Error! El alias introducido no pertenece a ningún usuario de la BD';
                                    }else{
                                        if($error=='usuarioInvalido'){
                                            echo '¡Error! No tienes permiso para navegar por aquí. Regístrate previamente.';
                                        }else{
                                            if($error=='activo'){
                                                echo '¡Error! Para acceder a la zona de usuario actívate previamente en tu email';
                                            }else{
                                                if($error=='nanai'){
                                                    echo '¡Error! No existe ningún usuario registrado con ese email';
                                                }else{
                                                    if($error=='vacio'){
                                                        echo '¡Error! Debe rellenar todos los campos';
                                                    }else{
                                                        if($error=='aliasExistente'){
                                                            echo '¡Error! Ya existe un usuario con ese alias en la BD';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            ?>
        </div></br></br>
    </body>
</html>