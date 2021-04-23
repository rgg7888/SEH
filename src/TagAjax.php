<?php

namespace App;

class TagAjax {

    public function __construct (
        public string|null $tag = null,
        public string|array|null $content = null,
        public string|null $attr = null
    ) {}

    public function crearTag ( string|null $tag = null ) {
        $this->tag = $tag;
    }

    public function obtenerTag () {
        return $this->tag;
    }

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

    #tag simple , attrs de una letra

    protected function listaMatches ( string $char ) {
        return match($char){
            "!" => "<!DOCTYPE html>",
            "l" => "lang=\""
        };
    }

    #determinar tag

    protected function iWantA ( string $tag ) {
        switch ( $tag ) {
            case 'html': return ['<','html','attrs','>','content','</html>'];
            break;
        }
    }

    #separar el atributo del valor

    protected function getFirstChar ( string $rawAttr ) {
        return [$rawAttr[0],substr($rawAttr,1)];
    }

    #unir palabra clave con su valor

    protected function createAttr ( string $char, string $value ) {
        return $this->listaMatches ( $char ) . $value ."\"";
    }

    #unir piezas

    protected function ensamblarTag ( array $piezas ) {
        if ( $this->obtenerAttr () !== null ) {
            $attrValue = $this->getFirstChar ( $this->obtenerAttr () );
            $this->crearAttr ( $this->createAttr ( $attrValue[0] , $attrValue[1] ) );
        }
        $content = is_array( $this->obtenerContent () ) ? implode ( "" , $this->obtenerContent () ) : $this->obtenerContent ();
        $attr = $this->obtenerAttr ();
        $piezas[2] = $attr;
        $piezas[4] = $content;
        if ( $piezas[2] !== null ) {
            return $piezas[0].$piezas[1]." ".$piezas[2].$piezas[3].$piezas[4].$piezas[5];
        } else {
            return $piezas[0].$piezas[1].$piezas[2].$piezas[3].$piezas[4].$piezas[5];
        }
        
    }

    #print element

    public function imprime () {
        $tag = $this->obtenerTag ();
        #verifico si el contenido es null
        if( $tag === null ) {
            /*
             * si es null el contenido entonces 
             * siempre por default se imprimira el
             * doctype
            */
            $this->crearTag ( '!' );
            return $this->listaMatches ( $this->obtenerTag () );
        } else {
            #esta condicion asegura que listaMatches devolvera algo
            if( $tag === '!' ) {
                $doctype = $this->listaMatches ( $tag );
                return $doctype;
            } else {
                /*
                    determinamos lo que queremos ,
                    ensamblamos la pieza y finalmente
                    retornamos la pieza en formato string
                */
                $pieza = $this->ensamblarTag ( $this->iWantA ( $this->obtenerTag () ) );
                return $pieza;
            }
        }
    }

}