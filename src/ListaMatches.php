<?php

namespace App;

class ListaMatches {
    public function __construct( 
        private string $char
    ){}

    public function setChar (string $char) {
        $this->char = $char;
    }

    public function getChar () {
        return $this->char;
    }

    public function listaMatches () {
        return match( $this->getChar() ){
            "!" => "<!DOCTYPE html>",
            "l" => "lang=\""
        };
    }
}