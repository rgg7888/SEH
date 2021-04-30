<?php

//@@@###@@@### -> Utileria

if(!function_exists('conectar')) {
    function conectar() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=seh", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
}

if(!function_exists('data_base_emulation')) {
    function data_base_emulation($json = null) {
        if($json !== null) {
            return json_decode($json,true);
        }else{
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
}

if(!function_exists('data_base_emulation_atributos')) {
    function data_base_emulation_atributos($json = null) {
        if($json !== null) {
            return json_decode($json,true);
        }else{
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
}

//@@@###@@@### -> Etiquetas

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

if(!function_exists('meta')) {
    function meta(string $atributos = null , $cambiarNivel = false) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('meta');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido();
        return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
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
        return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
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
        $etiqueta = new App\QuieroCrearUnaEtiqueta('body');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
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

if(!function_exists('h1')) {
    function h1($contenido = null,string $atributos = null , $cambiarNivel = false) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('h1');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        if($atributosDeLaEtiqueta->crearAtributos(
            $contenido,
            data_base_emulation_atributos(), 
            $cambiarNivel
        ) === "") {
            $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
            return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
                $piezas , $atributosDeLaEtiqueta->crearAtributos(
                    $atributos , 
                    data_base_emulation_atributos() , 
                    $cambiarNivel 
                ) 
            ) );
        }else{
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
}

if(!function_exists('br')) {
    function br(){
        $etiqueta = new App\QuieroCrearUnaEtiqueta('br');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        echo App\ConstruirPieza::ensamblar( $piezas );
    }
}