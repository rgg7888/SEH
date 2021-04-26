<?php

if(!function_exists('data_base_emulation')) {
    function data_base_emulation() {
        return [
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','0','>','1','<','/','html','>'],
            'head' => ['<','head','>','1','<','/','head','>'],
            'title' => ['<','title','>','1','<','/','title','>'],
            'body' => ['<','body ','0','>','1','<','/','body','>']
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
            "cr" => "crossorigin="
        ];
    }
}

if(!function_exists('pagina')) {
    function pagina($contenido = null,string $atributos = null , $cambiarNivel = false) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('doctype');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        echo App\ConstruirPieza::ensamblar( $piezas );
        $etiqueta->crearEtiqueta('html');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
        echo App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
            $piezas , $atributosDeLaEtiqueta->crearAtributos(
                $atributos , 
                data_base_emulation_atributos() , 
                $cambiarNivel 
            ) 
        ) );
    }
}

if(!function_exists('head')) {
    function head($contenido = null) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('head');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
        echo App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
            $piezas , $atributosDeLaEtiqueta->crearAtributos(
                $atributos , 
                data_base_emulation_atributos() , 
                $cambiarNivel 
            ) 
        ) );
    }
}

if(!function_exists('title')) {
    function title($contenido = null) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('title');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
        echo App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
            $piezas , $atributosDeLaEtiqueta->crearAtributos(
                $atributos , 
                data_base_emulation_atributos() , 
                $cambiarNivel 
            ) 
        ) );
    }
}

if(!function_exists('body')) {
    function body($contenido = null,string $atributos = null , $cambiarNivel = false) {
        $etiqueta->crearEtiqueta('body');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
        echo App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
            $piezas , $atributosDeLaEtiqueta->crearAtributos(
                $atributos , 
                data_base_emulation_atributos() , 
                $cambiarNivel 
            ) 
        ) );
    }
}