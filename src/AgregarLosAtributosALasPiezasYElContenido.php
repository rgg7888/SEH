<?php

namespace App;

class AgregarLosAtributosALasPiezasYElContenido {

    private $contenido;

    public function __construct($contenido) {
        $this->contenido = $contenido;
    }

    public function crearContenido($contenido) {
        $this->contenido = $contenido;
    }

    public function obtenerContenido() {
        return $this->contenido;
    }

    public function unir(array $arrayDePiezas , string $cadenaDeAtributos) {
        $contenido = is_array($this->obtenerContenido()) ? implode("",$this->obtenerContenido()) : $this->obtenerContenido();
        $cadenaDePiezas = implode("",$arrayDePiezas);

        
        $etiqueta = str_replace('0',$cadenaDeAtributos.',',$cadenaDePiezas);
        $etiqueta = str_replace('1',$contenido.',',$etiqueta);
        
        
        $etiqueta = explode(",",$etiqueta);
        return $etiqueta;
    }

}