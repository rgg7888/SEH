<?php

namespace App;

class CrearAtributosDeLaEtiqueta {

    public function __construct() {}

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

    public function dividirAtributosIndividualmente( $AtributosEnCrudo = null , $cambiarNivel = false) {
        if($AtributosEnCrudo !== null) {
            $arrayDeLaListaDeLasClavesYValoresPorAtributo = [];
            switch ($AtributosEnCrudo) {
                case is_array($AtributosEnCrudo) : array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,"array"); break;
                case !is_array($AtributosEnCrudo) : array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,"string"); break;
            }
            if($arrayDeLaListaDeLasClavesYValoresPorAtributo[0] === 'string') {
                #array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,"recibi un string");
                if($cambiarNivel) {#CREAR ATRIBUTOS NIVEL DOS , TOMANDO 2 CARACTERES DE REFERENCIA
                    #return "this is level 2 in the string section";
                    #return substr($AtributosEnCrudo , 0 , 2);
                    #return substr($AtributosEnCrudo , 2);
                    $arrayDeLaListaDeLasClavesYValoresPorAtributo = [];
                    $atributo = [
                        substr($AtributosEnCrudo , 0 , 2),
                        substr( $AtributosEnCrudo , 2 )
                    ];
                    array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,$atributo);
                }else{
                    $arrayDeLaListaDeLasClavesYValoresPorAtributo = [];
                    $atributo = [
                        $AtributosEnCrudo[0],
                        substr( $AtributosEnCrudo , 1 )
                    ];
                    array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,$atributo);
                }
            }else{
                #array_push($arrayDeLaListaDeLasClavesYValoresPorAtributo,"recibi un array");
                if($cambiarNivel){
                    #return "this is level 2 in the array section";
                    $arrayDeLaListaDeLasClavesYValoresPorAtributo = [];
                    $atributo = [];
                    for($i = 0; $i < count($AtributosEnCrudo); $i++) {
                        $atributo = [
                            substr($AtributosEnCrudo[$i], 0 , 2),
                            substr($AtributosEnCrudo[$i], 2 )
                        ];
                        array_push( $arrayDeLaListaDeLasClavesYValoresPorAtributo , $atributo );
                    }
                }else{
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
            }
            return $arrayDeLaListaDeLasClavesYValoresPorAtributo;
        }else{
            return;
        }
        
    }

    public function crearAtributos( string $listaDeAtributos = null , array $dataBase = [], $cambiarNivel = false) {
        if($listaDeAtributos !== null) {
            $listaDeAtributosConstruidos = [];
            $arrayDeAtributos = $this->separarAtributos($listaDeAtributos);
            $clavesDeLosAtributos = array_keys( $dataBase );
            $valoresDeLasClavesDeLosAtributos = array_values( $dataBase );
            $arrayDeAtributosIndividuales = $this->dividirAtributosIndividualmente( $arrayDeAtributos , $cambiarNivel );
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