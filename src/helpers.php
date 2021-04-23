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