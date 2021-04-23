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

if(!function_exists('ldmh')) {
    function ldmh ( string|null $tag = null , string|array|null $content = null , string|null $attr = null ) {
        $letra = new App\GetFirstChar ($content);
        $match = new App\ListaMatches ($letra->getFirstChar());
        if ($attr === null && $content === null && $tag !== null) {
            $tag = new App\IWantA ($tag);
            $piezas = $tag->iWantA();
            $piezas[2] = "";
            echo App\Ensamblar::ensamblar( $piezas );
        } else if ($match->listaMatches() === 'noHayMatches' && $attr === null && $tag !== null) {
            $tag = new App\IWantA ($tag);
            $piezas = $tag->iWantA();
            $piezas[2] = "";
            echo App\Ensamblar::ensamblar( $piezas , $content );
        } else if ($match->listaMatches() !== 'noHayMatches' && $attr === null && $tag !== null) {
            $tag = new App\IWantA ($tag);
            $piezas = $tag->iWantA();
            $attr = new App\GetFirstChar ($content);
            $match = new App\ListaMatches ($attr->getFirstChar());
            $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
            $piezas[2] = ' '.$atributo;
            echo App\Ensamblar::ensamblar( $piezas );
        } else {
            echo "<h1>WTF Are you doing dude !!!</h1>";
        }
    }
}

if(!function_exists('lmh')) {
    function lmh ( string|null $tag = null , string|array|null $content = null , string|null $attr = null ) {
        $letra = new App\GetFirstChar ($content);
        $match = new App\ListaMatches ($letra->getFirstChar());
        if ($attr === null && $content === null && $tag !== null) {
            $tag = new App\IWantA ($tag);
            $piezas = $tag->iWantA();
            $piezas[2] = "";
            return App\Ensamblar::ensamblar( $piezas );
        } else if ($match->listaMatches() === 'noHayMatches' && $attr === null && $tag !== null) {
            $tag = new App\IWantA ($tag);
            $piezas = $tag->iWantA();
            $piezas[2] = "";
            return App\Ensamblar::ensamblar( $piezas , $content );
        } else if ($match->listaMatches() !== 'noHayMatches' && $attr === null && $tag !== null) {
            $tag = new App\IWantA ($tag);
            $piezas = $tag->iWantA();
            $attr = new App\GetFirstChar ($content);
            $match = new App\ListaMatches ($attr->getFirstChar());
            $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
            $piezas[2] = ' '.$atributo;
            return App\Ensamblar::ensamblar( $piezas );
        } else {
            return "<h1>WTF Are you doing dude !!!</h1>";
        }
    }
}