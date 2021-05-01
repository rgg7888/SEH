<?php

namespace App;

class QuieroCrearUnaEtiqueta {

    private string $etiqueta;

    public function __construct( $etiqueta ) {
        $this->etiqueta = $etiqueta;
    }

    public function crearEtiqueta(string $etiqueta) {
        $this->etiqueta = $etiqueta;
    }

    public function obtenerEtiqueta () {
        return $this->etiqueta;
    }

    public function construirEtiqueta($innerHTMLDeLaEtiqueta = null,$atributos = null) {
       /*
	Escriba aqui su idea , descargue la version 0.0.1 y la version 0.0.2 
	para que se de una idea de lo que este metodo debe hacer y escriba su 
	version mejorada.

	no olvide compartir su version para que la comunidad pueda utilizarlo
	=)
	*/
    }

}
