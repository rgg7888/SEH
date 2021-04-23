<?php

namespace App;

class GetFirstChar {
    public function __construct( 
        private string|null $cadena = null
    ){}

    public function setCadena (string $cadena) {
        $this->cadena = $cadena;
    }

    public function getCadena () {
        return $this->cadena;
    }

    public function getFirstChar () {
        return $this->getCadena()[0];
    }

    public function getResto () {
        return substr( $this->getCadena() , 1 );
    }
}