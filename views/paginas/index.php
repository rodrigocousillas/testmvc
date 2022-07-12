<?php
// Displays the directory of this file
//echo "Desde Public/index: " . __DIR__;
//echo "<br />" ;
//echo "The full path of this file is: " . __FILE__;
?>
<section id="quienessomos" class="container-fluid homes">
        <div class="container">
            <div class="franjaAmarilla">

            </div>
            <div class="headerTitulo">
                <h1>SOCIEDAD COMERCIAL DEL PLATA</h1>
                <H2>Somos el vehículo de inversión<br />de la Argentina del futuro</H2>
            </div>
        </div>    
    </section>
<div class="container homePrincipalesActivos">
    <div class="row">
        <div class="row justify-content-end">
            <div class="col-8">
                <h4>PRINCIPALES ACTIVOS</h4>
                <p>Sociedad Comercial del Plata es un holding argentino con más de 14.000 accionistas en 17 países y 2.500 empleados, presente en sectores estratégicos como construcción, agroindustria, energía, transporte e infraestructura y real estate. Fundada en 1927,sus acciones cotizan en la Bolsa de Comercio de Buenos Aires y en el Six Swiss Exchange de Zurich. La acción de Sociedad Comercial del Plata es integrante del panel líder de la Bolsa de Comercio de Buenos Aires y del índice MerVal.</p>
            </div> 
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 mb-5 destacadosActivos">
            <div class="cajaNegra">
                <div class="titulo">Destilería Argentina<br>de Petróleo S.A.</div>
                <div class="numero">01</div>
                <div class="saberMas">Saber más -></div>
            </div>   
            <div>
                <img src="img/home_dapsa.jpg" alt="" class="img-fluid">          
            </div>
        </div>    
        <div class="col-12 col-md-4 mb-5 destacadosActivos">
            <div class="cajaNegra">
                <div class="titulo">Canteras<br>Cerro Negro S.A.</div>
                <div class="numero">02</div>
                <div class="saberMas">Saber más -></div>
            </div>   
            <div>
                <img src="img/home_cerronegro.jpg" alt="" class="img-fluid">          
            </div>
        </div>    
        <div class="col-12 col-md-4 mb-5 destacadosActivos">
            <div class="cajaNegra">
                <div class="titulo">Lamb Weston<br>Alimentos Modernos S.A.</div>
                <div class="numero">03</div>
                <div class="saberMas">Saber más -></div>
            </div>   
            <div>
                <img src="img/home_lamb.jpg" alt="" class="img-fluid">          
            </div>
        </div>    
        <div class="col-12 col-md-4 mb-5 destacadosActivos">
            <div class="cajaNegra">
                <div class="titulo">Compañía General<br>De Combustibles S.A.</div>
                <div class="numero">04</div>
                <div class="saberMas">Saber más -></div>
            </div>   
            <div>
                <img src="img/home_combustible.jpg" alt="" class="img-fluid">          
            </div>
        </div>    
        <div class="col-12 col-md-4 mb-5 destacadosActivos">
            <div class="cajaNegra">
                <div class="titulo">Ferroexpreso<br>Pampeano S.A.</div>
                <div class="numero">05</div>
                <div class="saberMas">Saber más -></div>
            </div>   
            <div>
                <img src="img/home_ferroexpreso.jpg" alt="" class="img-fluid">          
            </div>
        </div>    
        <div class="col-12 col-md-4 mb-5 destacadosActivos">
            <div class="cajaNegra">
                <div class="titulo">Delta Del Plata S.A.<br><br></div>
                <div class="numero">06</div>
                <div class="saberMas">Saber más -></div>
            </div>   
            <div>
                <img src="img/home_delta.jpg" alt="" class="img-fluid">          
            </div>
        </div>    
    </div>
</div>
<div class="container-fluid prensa">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h4>PRENSA</h4>
                <p>Todos los artículos relevantes <br>sobre el Grupo y sus activos</p>
            </div>
            <div class="col-12 col-md-4">
                <a href="/notasprensa" class="btn btn-prensa">Ver artículos prensa</a>
            </div>
        </div>
       
    </div>
		
    <div class="container-fluid p-0">
        <div class="row p-0 sliderCenter"> 
        <?php 
        include 'prensa_slider.php';
    ?>
        </div>          
    </div>        
</div>
