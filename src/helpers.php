<?php

if(!function_exists('doctype')) {
    function doctype () {
        $doctype = new App\TagAjax();
        echo $doctype->imprime ();
    }
}

if(!function_exists('dt')) {
    function dt () {
        $doctype = new App\TagAjax();
        echo $doctype->imprime ();
    }
}

if(!function_exists('emptyHtml')) {
    function emptyHtml ( string|null $value ) {
        $attr = '';
        if ( $value === null ) {
            $attr = null;
        } else {
            $attr = 'l'.$value;
        }
        $emptyHtml = new App\TagAjax('html',null,$attr);
        echo $emptyHtml->imprime ();
    }
}

if(!function_exists('html')) {
    function html ( string|array|null $content , string|null $attr ) {
        $html = new App\TagAjax('html',$content,$attr);
        echo $html->imprime ();
    }
}

if(!function_exists('htm')) {
    function htm ( string|array|null $content = null , string|null $attr = null ) {
        if ( $attr === null && strlen($content) === 2) {
            $attr = 'l'.$content;
            $content = null;
            $html = new App\TagAjax('html',$content,$attr);
            echo $html->imprime ();
        } else {
            $html = new App\TagAjax('html',$content,$attr);
            echo $html->imprime ();
        }
    }
}

/**
 * Hypertext Markup Language (html)
 * Lenguaje de marcado de hipertexto (lmh)
 */

if(!function_exists('lmh')) {
    function lmh ( string|array|null $content = null , string|null $attr = null ) {
        $tag = new App\IWantA ('html');
        $piezas = $tag->iWantA();
        $attr = new App\GetFirstChar ('l'.$attr);
        $match = new App\ListaMatches ($attr->getFirstChar());
        $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
        $piezas[2] = ' '.$atributo;
        echo App\Ensamblar::ensamblar( $piezas , $content );
    }
}

if(!function_exists('head')) {
    function head ( string|null $tag = null , string|array|null $content = null , string|null $attr = null ) {
        
    }
}