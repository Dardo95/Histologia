<style>


    img {
        height: 200px;
        width: 200px;
        /*border-radius*/
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }

    .scene3D {
        display: block;
        float: left;
        margin: 10px;
        /*border-radius*/
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        /*perspective*/
        -webkit-perspective: 500px;
        -moz-perspective: 500px;
        -ms-perspective: 500px;
        -o-perspective: 500px;
        perspective: 500px;
    }
    .flip div {
        position: absolute;
        width: 200px;
        height: 200px;
        /*border-radius*/
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        /*backface-visibility*/
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        -o-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .flip div:first-child {
        /*border-radius*/
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background: #333;
        /*transform*/
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -ms-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }
    .flip div:first-child p {
        color: #FFF;
        text-shadow: 0 0 1px .111;
        padding-top: 50px;
        text-align: center;
    }
    .flip {
        width: 200px;
        height: 200px;
        /*border-radius*/
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        /*box-shadow*/
        -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);
        -moz-box-shadow: 0 0 15px rgba(0,0,0,0.3);
        box-shadow: 0 0 15px rgba(0,0,0,0.3);
        /*transform*/
        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        -ms-transform: rotateX(0deg);
        -o-transform: rotateX(0deg);
        transform: rotateX(0deg);
        /*transition*/
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        transition: all 1s ease;
        /*transform-style*/
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }
    .scene3D:hover .flip {
        /*transform*/
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -ms-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }
</style>

<div class="container">
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Organo <br>
                    Pulmon <br>
                    Ampliado x10
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/pulmon10x.jpg"/>
            </div>
        </div>
    </div>
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Organo <br>
                    Riñon <br>
                    Ampliado x40
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/riñonx40.jpg"/>
            </div>
        </div>
    </div>
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Organo <br>
                    Ovario <br>
                    Ampliado x20
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/ovariox20jpg.jpg"/>
            </div>
        </div>
    </div>
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Organo <br>
                    Endometrio <br>
                    Ampliado x40
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/endometriox40.jpg"/>
            </div>
        </div>
    </div>
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Organo <br>
                    Epididimo <br>
                    Ampliado x10
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/epididimox10.jpg"/>
            </div>
        </div>
    </div>
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Organo <br>
                    Testiculos <br>
                    Ampliado x10
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/testiculox10.jpg"/>
            </div>
        </div>
    </div>

    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido Oseo <br>
                    Costilla <br>
                    Ampliado x20
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/costillax20.jpg"/>
            </div>
        </div>
    </div>

    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido Oseo <br>
                    Hueso Largo<br>
                    Ampliado x10
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/huesoLargox10.jpg"/>
            </div>
        </div>
    </div>

    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido Oseo <br>
                    Hueso Largo (Desgaste) <br>
                    Ampliado x10
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/huesoLargoDesgastex10.jpg"/>
            </div>
        </div>
    </div>

    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido Oseo <br>
                    Mandíbula Fetal<br>
                    Ampliado x10
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/mandíbulaFetalx10.jpg"/>
            </div>
        </div>
    </div>
    
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido muscular <br>
                    Intestin Delgado <br>
                    Ampliado x40
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/intestinoDelgadox40.jpg"/>
            </div>
        </div>
    </div>

    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido muscular <br>
                    Lengua <br>
                    Ampliado x40
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/lenguax40.jpg"/>
            </div>
        </div>
    </div>
    
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido muscular <br>
                    Miocardio (HE ferrica) <br>
                    Ampliado x40
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/miocardio(HEferrica)40x.jpg"/>
            </div>
        </div>
    </div>

    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido muscular <br>
                    Miometrio <br>
                    Ampliado x40
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/miometriox40.jpg"/>
            </div>
        </div>
    </div>
    
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido nervioso <br>
                    Cerebelo (Luxol fast blue)40 <br>
                    Ampliado x10
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/cerebelo(LuxolFastBlue)x40.jpg"/>
            </div>
        </div>
    </div>

    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido nervioso <br>
                    Cerebelo <br>
                    Ampliado x10
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/cerebelox10.jpg"/>
            </div>
        </div>
    </div>
    
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido nervioso <br>
                    Médula espinal <br>
                    Ampliado x40
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/medulaEspinalx40.jpg"/>
            </div>
        </div>
    </div>

    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Tejido nervioso <br>
                    Nervio periférico <br>
                    Ampliado x20
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/nervioperifericox20.jpg"/>
            </div>
        </div>
    </div>
    
    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Celula <br>
                    Patologia Inflamatoria<br>
                    Ampliado x400
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/patologia.jpg"/>
            </div>
        </div>
    </div>

    <div class="scene3D">
        <div class="flip">
            <div>
                <p>
                    Celulas Cubicas 
                </p>
            </div>
            <div>
                <img src="img/tarjetasMoviles/celulaCubica.jpg"/>
            </div>
        </div>
    </div>


</div>