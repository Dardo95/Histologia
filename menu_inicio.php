
<style>
    .resplandor{
    text-shadow: 0px 0px 10px #FFFFFF, 0px 0px 10px #FFFFFF, 0px 0px 10px #FFFFFF;
}
</style>

<script type="text/javascript">
        $(document).ready(function(){
        $("#inicio").click(function(){
                $('#centro2').load("menu_inicio.php #explicacion",{
        });
            });
        });
        
        $(document).ready(function(){
        $("#contacto").click(function(){
                $('#centro2').load("Contacto.php" ,{
        });
            });
        });
        
        $(document).ready(function(){
        $("#juego1").click(function(){
                $('#centro2').load("juego1.php" ,{
        });
            });
        });
        
        $(document).ready(function(){
        $("#juego2").click(function(){
                $('#centro2').load("juego2.php" ,{
        });
            });
        });
        
        $(document).ready(function(){
        $("#juego3").click(function(){
                $('#centro2').load("juego3.php" ,{
        });
            });
        });
        
        </script>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Histologia</a>
    </div>
    <ul class="nav navbar-nav">
        <li id="inicio" class="active"><a href="#">Inicio</a></li>
        <li id="contacto"><a href="#">Contacto</a></li>
        <li id="evaluacion"><a href="#">Evaluacion</a></li>
        <li id="juego1"><a href="#">Cada Oveja</a></li>
        <li id="juego2"><a href="#">Juego 2</a></li>
        <li id="juego3"><a href="#">Juego 3</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
        
        <div id="centro2" style="height: 800px">
            <div id="explicacion" class="jumbotron">
                <h2><b>Bienvenidos a la web de Histologia</b></h2>
    <br>
    <br>
    <p>En esta web encontrareis tres diferentes juegos para practicar lo que estais dando en clase
       y una pestaña,"Evaluacion", donde comprobar vuestras evaluacion sobre los juegos que realizeis
       haced clic en "Juegos" y os llevara al menu de los juegos y en "Contacto" tendreis informacion 
       de los creadores de esta web</p>
      </div>
        </div>
        