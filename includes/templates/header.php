<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SCP | Sociedad Comercial del Plata</title>
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
            <a class="navbar-brand" href="index.php"><img src="img/logo_scp.svg" alt="" width="200px">
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
                        <a class="nav-link" href="prensa.php">PRENSA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">CONTACTO</a>
                    </li>
                    <?php if($auth): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="cerrar-sesion.php">CERRAR SESION</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        </nav>
    </header>
   