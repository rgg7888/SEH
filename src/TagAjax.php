<?php

namespace App;

class TagAjax {

    public function __construct (
        public string|array|null $content = null,
        public string|null $attr = null
    ) {}

    public function crearContent ( string|array|null $content = null ) {
        $this->content = $content;
    }

    public function obtenerContent () {
        return $this->content;
    }

    public function crearAttr ( string|null $attr ) {
        $this->attr = $attr;
    }

    public function obtenerAttr () {
        return $this->attr;
    }

    #tag simple , estatica

    protected function listaMatches ( string $char ) {
        return match($char){
            "!" => "<!DOCTYPE html>"
        };
    }

    #print element

    public function imprime () {
        $content = $this->obtenerContent ();
        #verifico si el contenido es null
        if( $content === null ) {
            /*
             * si es null el contenido entonces 
             * siempre por default se imprimira el
             * doctype
            */
            $this->crearContent ( '!' );
            return $this->listaMatches ( $this->obtenerContent () );
        } else {
            #esta condicion asegura que listaMatches devolvera algo
            if( $content === '!' ) {
                $doctype = $this->listaMatches ( $content );
                return $doctype;
            } else {
                //something else should hapend here
            }
        }
    }

}