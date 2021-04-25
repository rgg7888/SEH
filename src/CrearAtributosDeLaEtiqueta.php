<?php

namespace App;

class CrearAtributosDeLaEtiqueta {

    private array $listaDeAtributos = [
        "l" => "lang=",
        "c" => "class=",
        "i" => "id=",
        "r" => "rel=",
        "h" => "href=",
        "s" => "src=",
        "d" => "defer",
    ];

    public function __construct() {}

    public function crearListaDeAtributos( array $listaDeAtributos ) {
        $this->listaDeAtributos = $listaDeAtributos;
    }

    public function obtenerListaDeAtributos() {
        return $this->listaDeAtributos;
    }

    public function separarAtributos( string $x = null) {
        if($x !== null) {
            $hayMasDeUnAtributo = false;
            for($i = 0; $i < strlen($x); $i++){
                if($x[$i] === "|") {
                    $hayMasDeUnAtributo = true;
                    break;
                }
            }
            if($hayMasDeUnAtributo) {
                return explode( "|" , $x );
            }else{
                return $x;
            }
        }else{
            return;
        }
        
    }

    public function dividirAtributosIndividualmente( $AtributosEnCrudo = null) {
        if($AtributosEnCrudo !== null) {
            $arrayDeLaListaDeLasClavesYValoresPorAtributo = [];
            switch ($AtributosEnCrudo) {
                case is_array($AtributosEnCrudo) : array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,"array"); break;
                case !is_array($AtributosEnCrudo) : array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,"string"); break;
            }
            if($arrayDeLaListaDeLasClavesYValoresPorAtributo[0] === 'string') {
                #array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,"recibi un string");
                $arrayDeLaListaDeLasClavesYValoresPorAtributo = [];
                $atributo = [
                    $AtributosEnCrudo[0],
                    substr( $AtributosEnCrudo , 1 )
                ];
                array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,$atributo);
            }else{
                #array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,"recibi un array");
                $arrayDeLaListaDeLasClavesYValoresPorAtributo = [];
                $atributo = [];
                for($i = 0; $i < count($AtributosEnCrudo); $i++) {
                    $atributo = [
                        $AtributosEnCrudo[$i][0],
                        substr($AtributosEnCrudo[$i],1)
                    ];
                    array_push( $arrayDeLaListaDeLasClavesYValoresPorAtributo , $atributo );
                }
            }
            return $arrayDeLaListaDeLasClavesYValoresPorAtributo;
        }else{
            return;
        }
        
    }

    public function crearAtributos( string $listaDeAtributos = null) {
        if($listaDeAtributos !== null) {
            $listaDeAtributosConstruidos = [];
            $arrayDeAtributos = $this->separarAtributos($listaDeAtributos);
            $clavesDeLosAtributos = array_keys( $this->obtenerListaDeAtributos() );
            $valoresDeLasClavesDeLosAtributos = array_values( $this->obtenerListaDeAtributos() );
            $arrayDeAtributosIndividuales = $this->dividirAtributosIndividualmente( $arrayDeAtributos );
            for($i = 0; $i < count($arrayDeAtributosIndividuales); $i++) {
                for($j = 0; $j < count($clavesDeLosAtributos); $j++) {
                    if( $arrayDeAtributosIndividuales[$i][0] === $clavesDeLosAtributos[$j] ) {
                        array_push( $listaDeAtributosConstruidos , $valoresDeLasClavesDeLosAtributos[$j].'"'.$arrayDeAtributosIndividuales[$i][1].'"' );
                    }
                }
            }
            return implode( "" , $listaDeAtributosConstruidos );
        }else{
            return;
        }
    }

}