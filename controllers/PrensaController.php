<?php

namespace Controllers;
use MVC\Router;
use Model\Prensa;
use Model\Empresas;
use Intervention\Image\ImageManagerStatic as Image;

class PrensaController {

    public static function index(Router $router) {
       
        $prensa = Prensa::all();
        
        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;
        
        $router->renderAdmin('prensa/admin', [
            'prensa' => $prensa,
            'resultado' => $resultado
          
        ]);
    }

    public static function crear(Router $router){
       
        $prensa = Prensa::all();
        $empresas = Empresas::all();
        // Arreglo con mensajes de errores
        $errores = Prensa::getErrores();

        // Ejecutar el código después de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $prensa = new Prensa($_POST['prensa']);

            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

            //resize a la imagen
            if($_FILES['prensa']['tmp_name']['imagen']){
                $image = Image::make($_FILES['prensa']['tmp_name']['imagen'])->fit(800,600);
                $prensa->setImagen($nombreImagen); 
            }    

        $errores = $prensa->validar();

        if(empty($errores)) {
           
            if(!is_dir(CARPETA_IMAGENES)) {
            mkdir(CARPETA_IMAGENES);
            }
    
            $image->save(CARPETA_IMAGENES . $nombreImagen);

            $prensa->guardar();

        }    

    }
        
        $router->renderAdmin('prensa/crear', [
            'prensa' => $prensa,
            'empresas' => $empresas,
            'errores' => $errores
        ]);
    }

    public static function actualizar(Router $router) {

        $id = validarORedireccionar('/admin');

        // Obtener los datos de la nota
        $prensa = Prensa::find($id);

        // Consultar para obtener los vendedores
        $empresas = Empresas::all();

        // Arreglo con mensajes de errores
        $errores = Prensa::getErrores();

        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $args = $_POST['prensa'];
        
            $prensa->sincronizar($args);
    
            $errores = $prensa->validar();
          
            
            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";
    
            if($_FILES['prensa']['tmp_name']['imagen']){
                $image = Image::make($_FILES['prensa']['tmp_name']['imagen'])->fit(800,600);
                $prensa->setImagen($nombreImagen); 
            }  
    
            if(empty($errores)) {
                if($_FILES['prensa']['tmp_name']['imagen']){
                $image->save(CARPETA_IMAGENES . $nombreImagen);
                }
    
                $prensa->guardar();
               
            }
            
        }    

        $router->renderAdmin('prensa/actualizar', [
            'prensa' => $prensa,
            'empresas' => $empresas,
            'errores' => $errores
        ]);

    }

    public static function eliminar(Router $router) {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo = $_POST['tipo'];

            // peticiones validas
            if(validarTipoContenido($tipo) ) {
                // Leer el id
                $id = $_POST['id'];
                $id = filter_var($id, FILTER_VALIDATE_INT);
                  
                $prensa = Prensa::find($id);
                $resultado = $prensa->eliminar();

                // Redireccionar
                if($resultado) {
                    header('location: /admin');
                }
            }
        }
    }

}

?>

