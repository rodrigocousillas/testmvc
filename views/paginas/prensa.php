<section class="container-fluid prensaHeader">
    <div class="container">
        <div class="franjaAmarilla"></div>
        <div class="headerTitulo">
            <h1>PRENSA</h1>
            <H2>Texto introductorio corto sobre nosotros</H2>
        </div>
    </div>    
</section>
<div class="container-fluid prensaFondo">
    <div class="container">
        <div class="row">
        <?php foreach($prensa as $press) { ?>
            <div class="col-md-4 prensaIndividual">
                <div class="card">
                    <img src="prensa/<?php echo $press->imagen;?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="marca">_<?php echo $press->empresaId;?></h5>
                        <p class="titulo"><?php echo $press->titulo?></p>
                        <div class="leerMas"><a href="notaprensa?id=<?php echo $press->id;?>">-> Leer más</a></div>
                    </div>
                </div>
                <div class="amarillaDirectorio"></div>
            </div>
        <?php } ?>
        </div>     
    </div>
</div>