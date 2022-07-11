
<?php foreach($prensa as $press) { ?>

<div class="sinpadding sliderHome">
    <div class="row">
        <div class="col-6 blanco">
            <img src="prensa/<?php echo $press->imagen;?>" alt="" width="100%">
        </div>
        <div class="col-6 blancoTextos blanco">
            <h5>_<?php echo $press->empresaId;?></h5>
                <p><?php echo $press->titulo?></p>
                <a href="notaprensa?id=<?php echo $press->id;?>" class="leerMas">-> Leer más</a>
                
        </div>
        <div class="col-8">
            <div class="amarilla"></div>
        </div>
    </div>
</div>

<?php } ?>