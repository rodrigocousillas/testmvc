<?php 
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;
use Controllers\PrensaController;
use Controllers\EmpresaController;
use Controllers\PaginasController;

$router = new Router();

$router->get('/notas/admin', [PrensaController::class, 'index']);
$router->get('/notas/crear', [PrensaController::class, 'crear']);
$router->post('/notas/crear', [PrensaController::class, 'crear']);
$router->get('/notas/actualizar', [PrensaController::class, 'actualizar']);
$router->post('/notas/actualizar', [PrensaController::class, 'actualizar']);
$router->post('/notas/eliminar', [PrensaController::class, 'eliminar']);

$router->get('/empresas/admin', [EmpresaController::class, 'index']);
$router->get('/empresas/crear', [EmpresaController::class, 'crear']);
$router->post('/empresas/crear', [EmpresaController::class, 'crear']);
$router->get('/empresas/actualizar', [EmpresaController::class, 'actualizar']);
$router->post('/empresas/actualizar', [EmpresaController::class, 'actualizar']);
$router->post('/empresas/eliminar', [EmpresaController::class, 'eliminar']);

$router->get('/index', [PaginasController::class, 'index']);
$router->get('/', [PaginasController::class, 'index']);
$router->get('/notasprensa', [PaginasController::class, 'notasprensa']);
$router->get('/notaprensa', [PaginasController::class, 'notaprensa']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);

$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

$router->comprobarRutas();

?>

<?php
// Displays the directory of this file
echo "Desde Public/index: " . __DIR__; 
echo "The full path of this file is: " . __FILE__;
?>