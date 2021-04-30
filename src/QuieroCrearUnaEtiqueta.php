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

    public function construirEtiqueta($interior = null,$atributos = null) {
        $documento = new \DOMDocument();
        $contenido = is_array($interior) ? implode("",$interior) : $interior;
        $etiqueta = $documento->createElement($this->obtenerEtiqueta(),$contenido);
        $documento->appendChild($etiqueta);
        if($atributos !== null) {#verifico si necesito agregarle atributos
            $lista = explode("|",$atributos);#separo los atributos atributo:valor
            $matriz = [];
            foreach($lista as $atributo) {#itero el arreglo resultante y almaceno cada arreglo dentro de otro arreglo
                array_push($matriz,explode(":",$atributo));
            }
            foreach($matriz as $atributoValor) {#itero la matriz para tomar el atributo y su valor
                $etiqueta->setAttributeNode(new \DOMAttr($atributoValor[0], $atributoValor[1]));
            }
            return $documento->saveHTML();
        }else{
            return $documento->saveHTML();
        }
      
    }

}