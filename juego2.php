

<!doctype html>
<html lang="es">
<head>
 
<title>A jQuery Drag-and-Drop Number Cards Game</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<!--<link rel="stylesheet" type="text/css" href="style.css">-->


<style>
    /* Add some margin to the page and set a default font and colour */
 

 
/* Give headings their own font */
 
h1, h2, h3, h4 {
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
 
/* Main content area */
 
#content {
  margin: 80px 70px;
  text-align: center;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none;
}
 
/* Header/footer boxes */
 
.wideBox {
  clear: both;
  text-align: center;
  margin: 70px;
  padding: 10px;
  background: #ebedf2;
  border: 1px solid #333;
}
 
.wideBox h1 {
  font-weight: bold;
  margin: 20px;
  color: #666;
  font-size: 1.5em;
}
 
/* Slots for final card positions */
 
#cardSlots {
  margin: 50px auto 0 auto;
  background: #ddf;
}
 
/* The initial pile of unsorted cards */
 
#cardPile {
  margin: 0 auto;
  background: #ffd;
}
 
#cardSlots, #cardPile {
  width: 100%;
  height: 300px;
  padding: 20px;
  border: 2px solid #333;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  -moz-box-shadow: 0 0 .3em rgba(0, 0, 0, .8);
  -webkit-box-shadow: 0 0 .3em rgba(0, 0, 0, .8);
  box-shadow: 0 0 .3em rgba(0, 0, 0, .8);
}
 
/* Individual cards and slots */
 
#cardSlots div, #cardPile div {
  float: left;
  width: 150px;
  height: 150px;
  padding: 10px;
  /*padding-top: 40px;*/
  padding-bottom: 0;
  border: 2px solid #333;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  margin: 0 0 0 10px;
  background: #fff;
}
 
#cardSlots div:first-child, #cardPile div:first-child {
  margin-left: 0;
}
 
#cardSlots div.hovered {
  background: #aaa;
}
 
#cardSlots div {
  border-style: dashed;
}
 
#cardPile div {
  background: #666;
  color: #fff;
  font-size: 50px;
  text-shadow: 0 0 3px #000;
}
 
#cardPile div.ui-draggable-dragging {
  -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
}
 
 
/* "You did it!" message */
#successMessage {
  position: absolute;
  left: 580px;
  top: 250px;
  width: 0;
  height: 0;
  z-index: 100;
  background: #dfd;
  border: 2px solid #333;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  -moz-box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
  -webkit-box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
  box-shadow: .3em .3em .5em rgba(0, 0, 0, .8);
  padding: 20px;
}
</style>


<script type="text/javascript">
 
// JavaScript will go here
var correctCards = 0;
$( init );
 
function init() {
 
  // Hide the success message
  $('#successMessage').hide();
  $('#successMessage').css( {
    left: '580px',
    top: '250px',
    width: 0,
    height: 0
  } );
 
  // Reset the game
  correctCards = 0;
  $('#cardPile').html( '' );
  $('#cardSlots').html( '' );
 
  // Create the pile of shuffled cards
  var numbers = [ 1, 2, 3, 4, 5 ];
  numbers.sort( function() { return Math.random() - .5 } );
 
  for ( var i=0; i<5; i++ ) {
    $('<div>' + numbers[i] + '</div>').data( 'number', numbers[i] ).attr( 'id', 'card'+numbers[i] ).appendTo( '#cardPile' ).draggable( {
      containment: '#content',
      stack: '#cardPile div',
      cursor: 'move',
      revert: true
    } );
  }
 
  // Create the card slots
  var words = [ 'one', 'two', 'three', 'four', 'five' ];
  for ( var i=1; i<=5; i++ ) {
    $('<div>' + words[i-1] + '</div>').data( 'number', i ).appendTo( '#cardSlots' ).droppable( {
      accept: '#cardPile div',
      hoverClass: 'hovered',
      drop: handleCardDrop
    } );
  }
 
}

//controlador de eventos
function handleCardDrop( event, ui ) {
  var slotNumber = $(this).data( 'number' );
  var cardNumber = ui.draggable.data( 'number' );
 
  // If the card was dropped to the correct slot,
  // change the card colour, position it directly
  // on top of the slot, and prevent it being dragged
  // again
 
  if ( slotNumber == cardNumber ) {
    ui.draggable.addClass( 'correct' );
    ui.draggable.draggable( 'disable' );
    $(this).droppable( 'disable' );
    ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } );
    ui.draggable.draggable( 'option', 'revert', false );
    correctCards++;
  } 
   
  // If all the cards have been placed correctly then display a message
  // and reset the cards for another go
 
  if ( correctCards == 10 ) {
    $('#successMessage').show();
    $('#successMessage').animate( {
      left: '380px',
      top: '200px',
      width: '400px',
      height: '100px',
      opacity: 1
    } );
  }
 
}
 
</script>
 
</head>
<body>
 
<div id="content">
 
  <div id="cardPile"> </div>
  <div id="cardSlots"> </div>
 
 
</div>
 
</body>
</html>
  
  
  
  
<!--   <table class="background-juegos" border="2px" height="100%" width="100%">
            <tr>
                <td id="droppable" class="tarea" rowspan="5">Campo unificado</td>
                <td class="draggable">Campo 1</td>
            </tr>
            <tr>
                <td class="draggable">Campo 2</td>
            </tr>
            <tr>
                <td class="draggable">Campo 3</td>
            </tr>
            <tr>
                <td class="draggable">Campo 4</td>
            </tr>
            <tr>
                <td class="draggable">Campo 5</td>
            </tr>
        </table>  -->


<!--<div style="height: 100%; width: 100%;">
    <div style="height: 100%; width: 70%; background-color: black; float: right;"></div>
    <div style="height: 100%; width: 30%; background-color: yellowgreen; float: right;">
        <div style="height: 20%; width: 100%;"></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>-->