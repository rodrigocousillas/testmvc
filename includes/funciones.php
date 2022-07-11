<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/prensa/');


function incluirTemplate( string  $nombre, bool $inicio = false ) {
    include TEMPLATES_URL . "/${nombre}.php"; 
}

function estaAutenticado() {
    session_start();

    if(!$_SESSION['login']) {
        header('Location: ../../login.php');
    }
}

function debugear($variable) {

    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;

}

function s($html) {
    $s = htmlspecialchars($html);
    return $s;
}

// Valida tipo de petición
function validarTipoContenido($tipo){
    $tipos = ['empresa', 'press'];
    return in_array($tipo, $tipos);
}

// Muestra los mensajes
function mostrarNotificacion($codigo) {
    $mensaje = '';

    switch ($codigo) {
        case 1:
            $mensaje = 'Nota de prensa creada correctamente';
            break;
        case 2:
            $mensaje = 'Nota de prensa actualizada correctamente';
            break;
        case 3:
            $mensaje = 'Nota de prensa eliminada correctamente';
            break;
        case 4:
            $mensaje = 'Empresa registrada correctamente';
            break;
        case 5:
            $mensaje = 'Empresa actualizada correctamente';
            break;
        case 6:
            $mensaje = 'Empresa eliminada correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}

function validarORedireccionar(string $url) {
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header("Location: ${url} " );
    }

    return $id;
}