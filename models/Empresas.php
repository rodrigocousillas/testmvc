<?php

namespace Model;

class Empresas extends ActiveRecord {

    protected static $tabla = 'empresa';
    protected static $columnasDB = ['id', 'sigla', 'nombre', 'descripcion'];

    public $id;
    public $sigla;
    public $nombre;
    public $descripcion;

    public function __construct($args = []) 
    {
        $this->id = $args['id'] ?? null;
        $this->sigla = $args['sigla'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$errores[] = "El Nombre es obligatorio";
        }

        if(!$this->sigla) {
            self::$errores[] = "La sigla es obligatoria";
        }

        if(!$this->descripcion) {
            self::$errores[] = "La descripción es obligatoria";
        }

        return self::$errores;
    }

}

?>