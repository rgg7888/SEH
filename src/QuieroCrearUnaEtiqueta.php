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

    public function listaDinamicaDeEtiquetasYpiezas(array $id_pieza) {
        $etiquetas = array_keys($id_pieza);
        $piezas = array_values($id_pieza);
        for($i = 0; $i < count($etiquetas); $i++) {
            if( $this->obtenerEtiqueta() === $etiquetas[$i] ) {
                return $piezas[$i];
            }
        }
    }
}