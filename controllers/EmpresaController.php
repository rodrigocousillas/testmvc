<?php

namespace Controllers;

use MVC\Router;
use Model\Empresas;


class EmpresaController{

    public static function index(Router $router) {
        $empresas = Empresas::all();

        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;

        $router->renderAdmin('empresas/admin', [
            'empresas' => $empresas,
            'resultado' => $resultado
        ]);
    }

    public static function crear(Router $router){
       
        // Arreglo con mensajes de errores
        $errores = Empresas::getErrores();

        $empresas = new Empresas;

        // Ejecutar el código después de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

           
            $empresas = new Empresas($_POST['empresas']);
       
           
            $errores = $empresas->validar();


            if(empty($errores)) {

                $empresas->guardar();

            }

    }

      
        $router->renderAdmin('empresas/crear', [
            'empresas' => $empresas,
            'errores' => $errores
        ]);
    }

    public static function actualizar(Router $router){

        $errores = Empresas::getErrores();
        $id = validarORedireccionar('admin');

        $empresas = Empresas::find($id);

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $args = $_POST['empresas'];
        
            $empresas ->sincronizar($args);
        
            $errores = $empresas->validar();
            
            if(empty($errores)) {

                $empresas->guardar();
            
            }
            
        }

        $router->renderAdmin('empresas/actualizar', [
            'empresas' => $empresas,
            'errores' => $errores
        ]);
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if($id){
                $tipo = $_POST['tipo'];
                if(validarTipoContenido($tipo)) {
                    $empresas = Empresas::find($id);
                    $empresas->eliminar();
                }
            }
        }
    }
}
?>