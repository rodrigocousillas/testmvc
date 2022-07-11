<?php
    $seccion = "headerLight";
?>
<div class="container prensaNota">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="marca">
            <?php echo $prensa->empresaId?>
            </div>
            <h1><?php echo $prensa->titulo?></h1>
            <img src="prensa/<?php echo $prensa->imagen;?>" alt="" width="100%">
        </div>
        <div class="col-6 offset-3 parrafo">
            <?php echo $prensa->texto;?>
        </div>
    </div>
</div>
<div class="container-fluid prensaRelacionadas">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <p>Noticias Relacionadas</p>
            </div>
            <div class="col-12 col-md-4">
                <a href="/notasprensa" class="btn btn-prensa">Ver artículos prensa</a>
            </div>
        </div>
        <div class="row"> 
            <div class="col-md-7 sinpadding sliderHome">
                <div class="row">
                    <div class="col-6 blanco">
                        <img src="img/camion_dapsa.jpg" alt="" width="100%">
                    </div>
                    <div class="col-6 blancoTextos blanco">
                        <h5>_DAPSA</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt .</p>
                        <div class="leerMas">-> Leer más</div>
                    </div>
                    <div class="col-8">
                        <div class="amarilla"></div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
