<?php 

        include ("./misfunciones.php");
        $mysqli = conectaBBDD();

        //leo los parametros que me pasa el index.php
        $usuario_nombre = $_POST['usuario_nombre'];
        $usuario_clave = $_POST['usuario_clave'];

        //echo $usuario_nombre;
        //hago la consulta a la BBDD
        $resultado_consulta = $mysqli->query("select * from usuario where DNI = '$usuario_nombre'");
        $numero_dnis = $resultado_consulta->num_rows;

        //como solo puede haber como mucho un DNI en este resultado por que el deni es campo clave y no se pudede repetir
        //lo pongo como un if si no, se tiene que tratar a todo el resuiltado de la query con un bucle for por ejemplo
        if($numero_dnis > 0){
                    $r = $resultado_consulta -> fetch_array();
                    $DNI = $r['DNI'];
                    $password = $r['password'];
                    if ($usuario_clave == $password){
                        require 'menu_inicio.php';
                    }
                    else {
                    require 'mensaje_error.php';

                        }
                }
        ?>
       