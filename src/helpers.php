<?php

//@@@###@@@### -> Utileria

if(!function_exists('data_base_emulation')) {
    function data_base_emulation() {
        return [
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','@','>','#','<','/','html','>'],
            'head' => ['<','head','>','#','<','/','head','>'],
            'meta' => ['<','meta ','@','/','>'],
            'title' => ['<','title','>','#','<','/','title','>'],
            'body' => ['<','body ','@','>','#','<','/','body','>'],
            'h1' => ['<','h1 ','@','>','#','<','/','h1','>'],
            'br' => ['<','br','/>']
        ];
    }
}

if(!function_exists('data_base_emulation_atributos')) {
    function data_base_emulation_atributos() {
        return [
            "l" => "lang=",
            "c" => "class=",
            "i" => "id=",
            "r" => "rel=",
            "h" => "href=",
            "s" => "src=",
            "d" => "defer",
            "cr" => "crossorigin=",
            "ch" => "charset="
        ];
    }
}

if(!function_exists('runEvalOne')) {
    function runEvalOne(
        $atributosDeLaEtiqueta = null,
        $piezas = null,
        $atributos = null,
        $cambiarNivel = false,
        $contenido = null
    ) {
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
        return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
            $piezas , $atributosDeLaEtiqueta->crearAtributos(
                $atributos , 
                data_base_emulation_atributos() , 
                $cambiarNivel 
            ) 
        ) );
    }
}

if(!function_exists('runEvalTwo')) {
    function runEvalTwo(
        $atributosDeLaEtiqueta = null,
        $piezas = null,
        $cambiarNivel = false,
        $contenido = null
    ) {
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido();
        return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
            $piezas , $atributosDeLaEtiqueta->crearAtributos(
                $contenido , 
                data_base_emulation_atributos() , 
                $cambiarNivel 
            ) 
        ) );
    }
}

if(!function_exists('evalPiezas')) {
    function evalPiezas(string $tag){
        $etiqueta = new App\QuieroCrearUnaEtiqueta($tag);
        return $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
    }
}

if(!function_exists('evalCadena')) {
    function evalCadena(
        $contenido = null,
        $atributos = null,
        $cambiarNivel = false,
        $piezas = null
    ) {
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        if($atributosDeLaEtiqueta->crearAtributos(
            $contenido,
            data_base_emulation_atributos(), 
            $cambiarNivel
        ) === "") {
            return runEvalOne(
                $atributosDeLaEtiqueta,
                $piezas,
                $atributos,
                $cambiarNivel,
                $contenido
            );
        }else{
            return runEvalTwo(
                $atributosDeLaEtiqueta,
                $piezas,
                $cambiarNivel,
                $contenido
            );
        }
    }
}

if(!function_exists('makeIt')) {
    function makeIt($piezas) {
        return App\ConstruirPieza::ensamblar( $piezas );
    }
}

//@@@###@@@### -> Etiquetas

if(!function_exists('pagina')) {
    function pagina($contenido = null,string $atributos = null , $cambiarNivel = false) {
        $piezas = evalPiezas('doctype');
        echo makeIt( $piezas );
        $piezas = evalPiezas('html');
        echo evalCadena(
            $contenido,
            $atributos,
            $cambiarNivel,
            $piezas
        );
    }
}

if(!function_exists('head')) {
    function head($contenido = null) {
        $piezas = evalPiezas('head');
        $contenido = is_array($contenido) ? implode("",$contenido) : $contenido;
        return $etiqueta = str_replace('#',$contenido.',',implode("",$piezas));
    }
}

if(!function_exists('meta')) {
    function meta(
        string $atributos = null,
        $cambiarNivel = false
    ) {
        $piezas = evalPiezas('meta');
        return evalCadena(
            null,
            $atributos,
            $cambiarNivel,
            $piezas
        );
    }
}

if(!function_exists('title')) {
    function title($contenido = null) {
        $piezas = evalPiezas('title');
        return evalCadena(
            $contenido,
            null,
            null,
            $piezas
        );
    }
}

if(!function_exists('body')) {
    function body(
        $contenido = null,
        string $atributos = null,
        $cambiarNivel = false
    ) {
        $piezas = evalPiezas('body');
        return evalCadena(
            $contenido,
            $atributos,
            $cambiarNivel,
            $piezas
        );
    }
}

if(!function_exists('h1')) {
    function h1(
        $contenido = null,
        string $atributos = null,
        $cambiarNivel = false
    ) {
        $piezas = evalPiezas('h1');
        return evalCadena(
            $contenido,
            $atributos,
            $cambiarNivel,
            $piezas
        );
    }
}

if(!function_exists('br')) {
    function br(){
        $piezas = evalPiezas('br');
        return makeIt( $piezas );
    }
}