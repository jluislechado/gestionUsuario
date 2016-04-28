{"filter":false,"title":"correctoUsuario.php","tooltip":"/php/correctoUsuario.php","undoManager":{"mark":40,"position":40,"stack":[[{"start":{"row":0,"column":0},"end":{"row":62,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"UTF-8\">","        <title></title>","         <link rel=\"stylesheet\" href=\"../estilo/estilo.css\"/>","    </head>","    <body>","        <header>","            <img src=\"../estilo/imagenes/cabecera.jpg\" alt=\"cabecera\" id=\"cabecera\"/>","        </header>","        <div class=\"blanco\"></div>","        <div class=\"mensaje\">","            <?php","                require '../clases/AutoCarga.php';","                $error=Request::get('error');","                if($error=='exito'){","                    echo 'Por motivos de seguridad, confirme su registro en su email personal, gracias.';","                }else{","                    if($error=='email'){","                        echo '¡Error! Ya existe un usuario registrado en la BD con el email introducido';","                    }else{","                        if($error=='coincidencia'){","                            echo '¡Error! Las contraseñas introducidas no coinciden';","                        }else{","                            if($error=='error'){","                                echo '¡Error! No se ha podido realizar el registro. Inténtelo de nuevo';","                            }else{","                                if($error=='login'){","                                    echo '¡Error! La contraseña introducida no es correcta';","                                }else{","                                    if($error=='alias'){","                                        echo '¡Error! El alias introducido no pertenece a ningún usuario de la BD';","                                    }else{","                                        if($error=='usuarioInvalido'){","                                            echo '¡Error! No tienes permiso para navegar por aquí. Regístrate previamente.';","                                        }else{","                                            if($error=='activo'){","                                                echo '¡Error! Para acceder a la zona de usuario actívate previamente en tu email';","                                            }else{","                                                if($error=='nanai'){","                                                    echo '¡Error! No existe ningún usuario registrado con ese email';","                                                }else{","                                                    if($error=='vacio'){","                                                        echo '¡Error! Debe rellenar todos los campos';","                                                    }else{","                                                        if($error=='aliasExistente'){","                                                            echo '¡Error! Ya existe un usuario con ese alias en la BD';","                                                        }","                                                    }","                                                }","                                            }","                                        }","                                    }","                                }","                            }","                        }","                    }","                }","            ?>","        </div></br></br>","    </body>","</html>"],"id":1}],[{"start":{"row":14,"column":16},"end":{"row":60,"column":24},"action":"remove","lines":["require '../clases/AutoCarga.php';","                $error=Request::get('error');","                if($error=='exito'){","                    echo 'Por motivos de seguridad, confirme su registro en su email personal, gracias.';","                }else{","                    if($error=='email'){","                        echo '¡Error! Ya existe un usuario registrado en la BD con el email introducido';","                    }else{","                        if($error=='coincidencia'){","                            echo '¡Error! Las contraseñas introducidas no coinciden';","                        }else{","                            if($error=='error'){","                                echo '¡Error! No se ha podido realizar el registro. Inténtelo de nuevo';","                            }else{","                                if($error=='login'){","                                    echo '¡Error! La contraseña introducida no es correcta';","                                }else{","                                    if($error=='alias'){","                                        echo '¡Error! El alias introducido no pertenece a ningún usuario de la BD';","                                    }else{","                                        if($error=='usuarioInvalido'){","                                            echo '¡Error! No tienes permiso para navegar por aquí. Regístrate previamente.';","                                        }else{","                                            if($error=='activo'){","                                                echo '¡Error! Para acceder a la zona de usuario actívate previamente en tu email';","                                            }else{","                                                if($error=='nanai'){","                                                    echo '¡Error! No existe ningún usuario registrado con ese email';","                                                }else{","                                                    if($error=='vacio'){","                                                        echo '¡Error! Debe rellenar todos los campos';","                                                    }else{","                                                        if($error=='aliasExistente'){","                                                            echo '¡Error! Ya existe un usuario con ese alias en la BD';","                                                        }","                                                    }","                                                }","                                            }","                                        }","                                    }","                                }","                            }","                        }","                    }","                }","            ?>","        </div></br></br>"],"id":2}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"insert","lines":[" "],"id":3}],[{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":["?"],"id":4}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":[">"],"id":5}],[{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":["e"],"id":6}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["c"],"id":7}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["h"],"id":8}],[{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["o"],"id":9}],[{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"remove","lines":["o"],"id":10}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"remove","lines":["h"],"id":11}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"remove","lines":["c"],"id":12}],[{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"remove","lines":["e"],"id":13}],[{"start":{"row":13,"column":12},"end":{"row":13,"column":20},"action":"remove","lines":["<?php ?>"],"id":14}],[{"start":{"row":13,"column":12},"end":{"row":13,"column":13},"action":"insert","lines":["<"],"id":15}],[{"start":{"row":13,"column":13},"end":{"row":13,"column":14},"action":"insert","lines":["h"],"id":16}],[{"start":{"row":13,"column":14},"end":{"row":13,"column":15},"action":"insert","lines":["1"],"id":17}],[{"start":{"row":13,"column":15},"end":{"row":13,"column":21},"action":"insert","lines":["></h1>"],"id":18}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"insert","lines":["S"],"id":19}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"insert","lines":["e"],"id":20}],[{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":[" "],"id":21}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["h"],"id":22}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["a"],"id":23}],[{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":[" "],"id":24}],[{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["b"],"id":25}],[{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"insert","lines":["o"],"id":26}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["r"],"id":27}],[{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["r"],"id":28}],[{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["a"],"id":29}],[{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["d"],"id":30}],[{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["o"],"id":31}],[{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":[" "],"id":32}],[{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["c"],"id":33}],[{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["o"],"id":34}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["n"],"id":35}],[{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":[" "],"id":36}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["é"],"id":37}],[{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["x"],"id":38}],[{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"insert","lines":["i"],"id":39}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"insert","lines":["t"],"id":40}],[{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"insert","lines":["o"],"id":41}]]},"ace":{"folds":[],"scrolltop":56,"scrollleft":0,"selection":{"start":{"row":13,"column":39},"end":{"row":13,"column":39},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"start","mode":"ace/mode/php"}},"timestamp":1457385346562,"hash":"60016d57f5523dfebd4ac27a08ea38f8ff0278a4"}