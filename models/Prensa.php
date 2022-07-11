<?php

namespace Model;

class Prensa extends ActiveRecord {

    protected static $tabla = 'prensa';
    protected static $columnasDB = ['id', 'empresaId', 'titulo', 'bajada', 'texto', 'imagen', 'fecha'];

    public $id;
    public $empresaId;
    public $titulo;
    public $bajada;
    public $texto;
    public $imagen;
    public $fecha;

    public function __construct($args = []) 
    {
        $this->id = $args['id'] ?? null;
        $this->empresaId = $args['empresaId'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->bajada = $args['bajada'] ?? '';
        $this->texto = $args['texto'] ?? '';
        $this->imagen = $args['imagen'] ?? '' ;
        $this->fecha = date('Y/m/d');
    }

    

    public function validar() {

        if(!$this->empresaId) {
            self::$errores[] = "Debes seleccionar la empresa.";
        }

        if(!$this->titulo) {
            self::$errores[] = "Falta el titulo de la nota de prensa.";
        }

        if(!$this->bajada) {
            self::$errores[] = "Falta la bajada de la nota de prensa.";
        }

        if(!$this->texto) {
            self::$errores[] = "Falta el desarrollo de la nota de prensa.";
        }

        if(!$this->imagen) {
            self::$errores[] = "La imagen es obligatoria";
        }

        return self::$errores;
    }

}