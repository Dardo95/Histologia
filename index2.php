<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include ("./misfunciones.php");
    $mysqli = conectaBBDD();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <style>
            body{
                background: black;
                background-image:url(img/title1.jpg);
                background-size: cover;
            }
        </style>
    </head>
    <body>
        
        <div class="row">
                <div class="col-md-12"><h2 class="text-center">EJEMPLO INICIO DE SESION EN PHP</h2></div>
            </div>
        
        
        <?php
        $usuario_nombre = $_POST['usuario_nombre'];
        $usuario_clave = $_POST['usuario_clave'];
        $resultado_consulta = $mysqli -> query("select * from usuarios where DNI = '$usuario_nombre'");
        $numero_dnis = $resultado_consulta -> num_rows;
                if($numero_dnis > 0){
                    $r = $resultado_consulta -> fetch_array();
                    $DNI = $r['DNI'];
                    $password = $r['password'];
                    if ($usuario_clave == $password){
                
        ?>
        
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php echo $usuario_nombre; ?>
                    <br>
                    <?php echo $usuario_clave; ?>
                </div>
                <div class="col-md-4"></div>
            </div>
        
        <?php
                } }
        else {
            ?>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h3>EL USUARIO Y CONTRASEÑA SON INCORRECTOS</h3>
                </div>
                <div class="col-md-4"></div>
            </div>
        
        
        <?php
        }
        ?>
        
    </body>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
