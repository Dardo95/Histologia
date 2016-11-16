<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>jQuery memory card / concentration / pairs game</title>
  <meta name="description" content="Quizy jquery plugin for creating memory game (concentration gaim, pairs game)">
  <meta name="keywords" content="jquery plugin, memory game, concentration, pairs game, javascript, jquery" />

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/quizymemorygame.css">
  
  <style>
    body{
      font-family:Helvetica, Arial, Verdana;
    }
    
    img{
        height: 100%;
        width: 100%;
        max-height: 156px;
        max-width: 156px;
    }
    
    #tutorial-memorygame{
      margin:auto;
      width:780px;
    }
    
    .text-style1{
      font-size:14pt;
      color:#56605f;
      font-weight:normal;
      text-shadow: 1px 1px 1px #fff;
      margin:0;
      line-height:24pt;
    }
    
  </style>

</head>
<body>
  
  
  <div id="main" role="main">
    
    <div id="tutorial-memorygame" class="quizy-memorygame">
      <ul>
          <li class="match1">
              <img src="demo/img/celulaCubica.jpg">
          </li>
          <li class="match2">
              <img src="demo/img/ovariox20jpg.jpg">
          </li>
          <li class="match3">
              <img src="demo/img/intestinoDelgadox40.jpg">
          </li>
          <li class="match4">
              <img src="demo/img/riñonx40.jpg">
          </li>
          <li class="match5">
              <img src="demo/img/pulmon 10x.jpg">
          </li>
          <li class="match6">
              <img src="demo/img/testiculox10.jpg">
          </li>
          <li class="match1">
            <br><br><br><p class="text-style1">celula Cubica</p>
          </li>
          <li class="match2">
            <br><br><br><p class="text-style1">Ovario </p>
          </li>
          <li class="match3">
            <br><br><br><p class="text-style1">intestino delgado</p>
          </li>
          <li class="match4">
            <br><br><br><p class="text-style1">riñon</p>
          </li>
          <li class="match5">
            <br><br><br><p class="text-style1">pulmon</p>
          </li>
          <li class="match6">
            <br><br><br><p class="text-style1">testiculo</p>
          </li>
      </ul>
    </div>
    
   


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="js/jquery-ui-1.8.17.custom.min.js"></script>
  
  <script src="js/jquery.flip.min.js"></script>
  <script src="js/jquery.quizymemorygame.js"></script>
  
  <script>
    $('#tutorial-memorygame').quizyMemoryGame({itemWidth: 156, itemHeight: 156, itemsMargin:40, colCount:4, animType:'flip' , flipAnim:'tb', animSpeed:250, resultIcons:true });
  </script>
  

</body>
</html>