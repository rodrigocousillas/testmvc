<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)) {
        $inicio = false;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN</title>
	<link rel="preload" href="css/normalize.css" as="style">
	<link rel="stylesheet" href="css/normalize.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preload" href="css/main.css" as="style">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media_queries.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slick/slick.css">
    <link rel="stylesheet" href="css/slick/slick-theme.css">
</head>
<body>
    <header class="container-fluid <?php if ($seccion=='PrensaInterior') { echo 'lightNav header_light'; } else if ($seccion=='Contacto') { echo 'lightNav'; } else { echo 'header'; } ?>">
        <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="img/logo_scp.svg" alt="" width="200px">
            <!--<?php 
            /*if($seccion=='PrensaInterior') { echo '<img src="img/logo_scp_b.svg" alt="" width="200px">'; }
            if($seccion=='Contacto') { echo '<img src="img/logo_scp_b.svg" alt="" width="200px">'; }
            if($seccion=='Inicio') { echo '<img src="img/logo_scp.svg" alt="" width="200px">'; } 
            if($seccion=='Activos') { echo '<img src="img/logo_scp.svg" alt="" width="200px">'; } 
            if($seccion=='Holding') { echo '<img src="img/logo_scp.svg" alt="" width="200px">'; } 
            if($seccion=='Prensa') { echo '<img src="img/logo_scp.svg" alt="" width="200px">'; }
            if($seccion=='Historia') { echo '<img src="img/logo_scp.svg" alt="" width="200px">'; } 
            */?>-->
            </a>
            
            
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="">ESP <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
</svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">HOLDING <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
</svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">PRINCIPALES ACTIVOS <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
</svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">INVERSORES <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
</svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notasprensa">PRENSA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">CONTACTO</a>
                    </li>
                    <?php if($auth): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">CERRAR SESION</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        </nav>
    </header>
   
    <?php echo $contenido; ?>

    <div class="container-fluid pieDePagina">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <h5>Holding</h5>
                <ul>
                    <li><a href="nosotros.php">Quienes Somos *</a></li>
                    <li><a href="gobierno_corporativo.php">Gobierno Corporativo *</a></li>
                    <li><a href="historia.php">Nuestra Historia</a></li>
                </ul>
                <h6>Principales Activos</h6>
                <ul>
                    <li><a href="dapsa.php">Destilería Argentina de Petrolera S.A.</a></li>
                    <li><a href="cerronegro.php">Cantera Cerro Negro S.A.</a></li>
                    <li><a href="lambweston.php">Lamb Weston Alimentos Modernos S.A.</a></li>
                    <li><a href="combustibles.php">Compañía General de Combustibles S.A.</a></li>
                    <li><a href="ferroexpresopampeano.php">Ferroexpreso Pampeano S.A.</a></li>
                    <li><a href="deltadelplata.php">Delta Del Plata S.A.</a></li>
                    <li><a href="otros.php">Otros</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <h5>Inversores</h5>
                <ul>
                    <li><a href="cotizacion.php">Cotización *</a></li>
                    <li><a href="#">Información Financiera</a></li>
                    <li><a href="presentaciones.php">Presentaciones *</a></li>
                    <li><a href="#">Ratios</a></li>
                    <li><a href="programa_integridad.php">Programa de Integridad *</a></li>
                </ul>
                <h6><a href="prensa.php">Prensa *</a></h6>
                <h5><a href="contacto.php">Contacto *</a></h5>
            </div>
            <div class="col-12 col-md-5">
                <h5>Ubicación</h5>
                <a href="https://goo.gl/maps/YQPWzti5e8gZ5dxX7" target="_blank">Lumina Thames Torre B, Colectora Panamericana 1804</a>,<br>1° Piso - (B1607EEV) V. Adelina , San Isidro Buenos Aires Argentina.
                <h6>Contacto</h6>
                Por cualquier consulta no dude en llamarnos o enviarnos<br>un correo electrónico.
                <br><br>(+5411) 2152-6000<span style="padding-left:20px; padding-right:20px;">|</span><a href="mailto:contacto@scp.com.ar">contacto@scp.com.ar</a><span style="padding-left:20px; padding-right:20px;">|</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="index.php"><img src="img/logo_scp.svg" alt=""></a>
                <br>
                ® Todos los derechos reservados SCP 2021, Buenos Aires, Argentina.
            </div>
        </div>
    </div>
</div>
    
    
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!--<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>-->

</body>
</html>