<?php

namespace App;

class AgregarLosAtributosALasPiezasYElContenido {

    private $contenido;

    public function __construct($contenido = null) {
        $this->contenido = $contenido;
    }

    public function crearContenido($contenido) {
        $this->contenido = $contenido;
    }

    public function obtenerContenido() {
        return $this->contenido;
    }

    public function unir(array $arrayDePiezas , string $cadenaDeAtributos = null) {
        $contenido = is_array($this->obtenerContenido()) ? implode("",$this->obtenerContenido()) : $this->obtenerContenido();
        $cadenaDePiezas = implode("",$arrayDePiezas);
        $etiqueta = str_replace('@',$cadenaDeAtributos.',',$cadenaDePiezas);
        $etiqueta = str_replace('#',$contenido.',',$etiqueta);
        $etiqueta = explode(",",$etiqueta);
        return $etiqueta;
    }

}