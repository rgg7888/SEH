<?php

namespace App;

class ListaMatches {
    public function __construct( 
        private string|null $char = null
    ){}

    public function setChar (string $char) {
        $this->char = $char;
    }

    public function getChar () {
        return $this->char;
    }

    public function listaMatches () {
        try {
            return match( $this->getChar() ){
                "!" => "<!DOCTYPE html>",
                "l" => "lang=\"",
                "c" => "class=\"",
                "i" => "id=\"",
                "r" => "rel=\"",
                "h" => "href=\"",
                "s" => "src=\"",
                "d" => "defer",
                default => "noHayMatches"
            };
        }catch(Exception $e){
            return "Error " . $e;
        }
    }

}