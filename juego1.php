<!DOCTYPE html>
<html>
    <head>
        <style>
            div#memory_board{
                background:#CCC;
                border:#999 1px solid;
                width:775px;
                height:775px;
                padding:24px;
                margin:0px auto;
            }
            div#memory_board > div{
                background: url(tile_bg.jpg) no-repeat;
                border:#000 1px solid;
                width:125px;
                height:125px;
                float:left;
                margin:10px;
                padding:20px;
                font-size:64px;
                cursor:pointer;
                text-align:center;
            }

            .timeClass {
                font-family:arial,verdana,helvetica,sans-serif;
                font-weight:normal;
                font-size:10pt;
            }
        </style>
        <script src="js/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
        <script>


            var memory_array = ['A', 'A', 'B', 'B', 'C', 'C', 'D', 'D', 'E', 'E', 'F', 'F', 'G', 'G', 'H', 'H', 'I', 'I', 'J', 'J', 'K', 'K', 'L', 'L'];
            var memory_values = [];
            var memory_tile_ids = [];
            var tiles_flipped = 0;
            Array.prototype.memory_tile_shuffle = function () {
                var i = this.length, j, temp;
                while (--i > 0) {
                    j = Math.floor(Math.random() * (i + 1));
                    temp = this[j];
                    this[j] = this[i];
                    this[i] = temp;
                }
            };
            function newBoard() {
                tiles_flipped = 0;
                var output = '';
                memory_array.memory_tile_shuffle();
                for (var i = 0; i < memory_array.length; i++) {
                    output += '<div id="tile_' + i + '" onclick="memoryFlipTile(this,\'' + memory_array[i] + '\')"></div>';
                }
                document.getElementById('memory_board').innerHTML = output;
            }
            function memoryFlipTile(tile, val) {
                if (tile.innerHTML === "" && memory_values.length < 2) {
                    tile.style.background = '#FFF';
                    tile.innerHTML = val;
                    if (memory_values.length === 0) {
                        memory_values.push(val);
                        memory_tile_ids.push(tile.id);
                    } else if (memory_values.length === 1) {
                        memory_values.push(val);
                        memory_tile_ids.push(tile.id);
                        if (memory_values[0] === memory_values[1]) {
                            tiles_flipped += 2;
                            // Clear both arrays
                            memory_values = [];
                            memory_tile_ids = [];
                            // Check to see if the whole board is cleared
                            if (tiles_flipped === memory_array.length) {
                                swal("¡Bien hecho!", "Lo has conseguido.", "success");
                                document.getElementById('memory_board').innerHTML = "";

                            }
                        } else {
                            function flip2Back() {
                                // Flip the 2 tiles back over
                                var tile_1 = document.getElementById(memory_tile_ids[0]);
                                var tile_2 = document.getElementById(memory_tile_ids[1]);
                                tile_1.style.background = 'url(tile_bg.jpg) no-repeat';
                                tile_1.innerHTML = "";
                                tile_2.style.background = 'url(tile_bg.jpg) no-repeat';
                                tile_2.innerHTML = "";
                                // Clear both arrays
                                memory_values = [];
                                memory_tile_ids = [];
                            }
                            setTimeout(flip2Back, 700);
                        }
                    }
                }
            }
        </script>
        <script>
var seconds = 60;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds === 0) {
        clearInterval(countdownTimer);
        swal({
            title: "Estas Seguro?",  
            text: "Dale para reiniciar",  
            type: "warning",  
            showCancelButton: true,  
            confirmButtonColor: "#DD6B55",  
            confirmButtonText: "Si reiniciar!",  
            closeOnConfirm: false
        },
        function(){  
            swal("Reinicia!", "Se va ha reiniciar.", "success");
        });
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {
        seconds--;
    }
}
 
var countdownTimer = setInterval('secondPassed()', 1000);
</script>
    </head>
    <body>
        <table width="100%">
            <tr><td><button onclick="newBoard();">reset</button></td></tr>
            <tr><td width="100%" align="center"><span id="theTime" class="timeClass"></span></td></tr>
        </table>
        <span id="countdown" class="timer"></span>
        <div id="memory_board"></div>
        <script>newBoard();</script>

    </body>
</html>