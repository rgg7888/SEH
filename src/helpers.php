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

        if ( $attr === null && strlen($content) === 2) {
            $attr = new App\GetFirstChar ('l'.$content);
            $match = new App\ListaMatches ($attr->getFirstChar());
            $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
            $piezas[2] = ' '.$atributo;
            echo App\Ensamblar::ensamblar( $piezas );
        } else {

            if($attr === null){
                $attr = new App\GetFirstChar ($attr);
            }else{
                $attr = new App\GetFirstChar ('l'.$attr);
            }
            
            $match = new App\ListaMatches ($attr->getFirstChar());
            $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
            if($atributo === "noHayMatches") {
                $piezas[2] = '';
            }else{
                $piezas[2] = ' '.$atributo;
            }
            echo App\Ensamblar::ensamblar( $piezas , $content );
        }
    }
}

if(!function_exists('head')) {
    function head ( string|array|null $content = null ) {
        $tag = new App\IWantA ('head');
        $piezas = $tag->iWantA();
        $piezas[2] = '';
        return App\Ensamblar::ensamblar( $piezas , $content );
    }
}

if(!function_exists('body')) {
    function body ( string|array|null $content = null , string|null $attr = null ) {
        $tag = new App\IWantA ('body');
        $piezas = $tag->iWantA();

        if($attr === null) {
            $piezas[2] = '';
        }else{
            $attrs = explode("|",$attr);
            for($i = 0; $i < count($attrs); $i++){
                $attr = new App\GetFirstChar ($attrs[$i]);
                $match = new App\ListaMatches ($attr->getFirstChar());
                $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
                $piezas[2] .= ' '.$atributo;
            }
        }
        $attrs = new App\GetFirstChar ($content);
        $match = new App\ListaMatches ($attrs->getFirstChar());
        if ($attr === null && $match->listaMatches() !== "noHayMatches"){
            $attris = explode("|",$content);
            for($i = 0; $i < count($attris); $i++){
                $attr = new App\GetFirstChar ($attris[$i]);
                $match = new App\ListaMatches ($attr->getFirstChar());
                $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
                $piezas[2] .= ' '.$atributo;
            }
            $content = null;
        }
        
        return App\Ensamblar::ensamblar( $piezas , $content );
    }
}

if(!function_exists('script')) {
    function script ( string|array|null $content = null , string|null $attr = null ) {
        $tag = new App\IWantA ('script');
        $piezas = $tag->iWantA();

        if($attr === null) {
            $piezas[2] = '';
        }else{
            $attrs = explode("|",$attr);
            for($i = 0; $i < count($attrs); $i++){
                $attr = new App\GetFirstChar ($attrs[$i]);
                $match = new App\ListaMatches ($attr->getFirstChar());
                $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
                $piezas[2] .= ' '.$atributo;
            }
        }
        $attrs = new App\GetFirstChar ($content);
        $match = new App\ListaMatches ($attrs->getFirstChar());
        if ($attr === null && $match->listaMatches() !== "noHayMatches"){
            $attris = explode("|",$content);
            for($i = 0; $i < count($attris); $i++){
                $attr = new App\GetFirstChar ($attris[$i]);
                $match = new App\ListaMatches ($attr->getFirstChar());
                $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
                $piezas[2] .= ' '.$atributo;
            }
            $content = null;
        }
        
        return App\Ensamblar::ensamblar( $piezas , $content );
    }
}

if(!function_exists('button')) {
    function button ( string|array|null $content = null , string|null $attr = null ) {
        $tag = new App\IWantA ('button');
        $piezas = $tag->iWantA();

        if($attr === null) {
            $piezas[2] = '';
        }else{
            $attrs = explode("|",$attr);
            for($i = 0; $i < count($attrs); $i++){
                $attr = new App\GetFirstChar ($attrs[$i]);
                $match = new App\ListaMatches ($attr->getFirstChar());
                $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
                $piezas[2] .= ' '.$atributo;
            }
        }
        $attrs = new App\GetFirstChar ($content);
        $match = new App\ListaMatches ($attrs->getFirstChar());
        if ($attr === null && $match->listaMatches() !== "noHayMatches"){
            $attris = explode("|",$content);
            for($i = 0; $i < count($attris); $i++){
                $attr = new App\GetFirstChar ($attris[$i]);
                $match = new App\ListaMatches ($attr->getFirstChar());
                $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
                $piezas[2] .= ' '.$atributo;
            }
            $content = null;
        }
        
        return App\Ensamblar::ensamblar( $piezas , $content );
    }
}

if(!function_exists('section')) {
    function section ( string|array|null $content = null , string|null $attr = null ) {
        $tag = new App\IWantA ('section');
        $piezas = $tag->iWantA();

        if($attr === null) {
            $piezas[2] = '';
        }else{
            $attrs = explode("|",$attr);
            for($i = 0; $i < count($attrs); $i++){
                $attr = new App\GetFirstChar ($attrs[$i]);
                $match = new App\ListaMatches ($attr->getFirstChar());
                $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
                $piezas[2] .= ' '.$atributo;
            }
        }
        $attrs = new App\GetFirstChar ($content);
        $match = new App\ListaMatches ($attrs->getFirstChar());
        if ($attr === null && $match->listaMatches() !== "noHayMatches"){
            $attris = explode("|",$content);
            for($i = 0; $i < count($attris); $i++){
                $attr = new App\GetFirstChar ($attris[$i]);
                $match = new App\ListaMatches ($attr->getFirstChar());
                $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
                $piezas[2] .= ' '.$atributo;
            }
            $content = null;
        }
        
        return App\Ensamblar::ensamblar( $piezas , $content );
    }
}

if(!function_exists('title')) {
    function title ( string|array|null $content = null , string|null $attr = null ) {
        $tag = new App\IWantA ('title');
        $piezas = $tag->iWantA();
        $piezas[2] = '';
        return App\Ensamblar::ensamblar( $piezas , $content );
    }
}

if(!function_exists('metaGroup')) {
    function metaGroup ( string|null $description = null , string|null $keywords = null , string|null $autor = null ) {
        #grupo de etiquetas
        $metaGroup = [];
            #meta tag 1
            $tag01 = new App\IWantA ('meta');
            $piezas = $tag01->iWantA();
            $piezas[2] = ' charset="UTF-8"';
            App\Ensamblar::ensamblar( $piezas );
            array_push($metaGroup,$etiqueta01);
            #meta tag 2 
            $tag02 = new App\IWantA ('meta');
            $piezas = $tag02->iWantA();
            $piezas[2] = ' name="description" content="'.$description.'"';
            $etiqueta02 = App\Ensamblar::ensamblar( $piezas );
            array_push($metaGroup,$etiqueta02);
            #meta tag 3
            $tag03 = new App\IWantA ('meta');
            $piezas = $tag03->iWantA();
            $piezas[2] = ' name="keywords" content="'.$keywords.'"';
            $etiqueta03 = App\Ensamblar::ensamblar( $piezas );
            array_push($metaGroup,$etiqueta03);
            #meta tag 4
            $tag04 = new App\IWantA ('meta');
            $piezas = $tag04->iWantA();
            $piezas[2] = ' name="author" content="'.$autor.'"';
            $etiqueta04 = App\Ensamblar::ensamblar( $piezas );
            array_push($metaGroup,$etiqueta04);
            #meta tag 5
            $tag05 = new App\IWantA ('meta');
            $piezas = $tag05->iWantA();
            $piezas[2] = ' name="viewport" content="width=device-width, initial-scale=1.0"';
            $etiqueta05 = App\Ensamblar::ensamblar( $piezas );
            array_push($metaGroup,$etiqueta05);
            #meta tag 6
            $tag06 = new App\IWantA ('meta');
            $piezas = $tag06->iWantA();
            $piezas[2] = ' http-equiv="X-UA-Compatible" content="ie=edge"';
            $etiqueta06 = App\Ensamblar::ensamblar( $piezas );
            array_push($metaGroup,$etiqueta06);
        return implode("",$metaGroup);
        //
    }
}

if(!function_exists('lnk')) {
    function lnk ( string|null $attr = null ) {
        $tag = new App\IWantA ('link');
        $piezas = $tag->iWantA();
        $attrs = explode("|",$attr);
        for($i = 0; $i < count($attrs); $i++){
            $attr = new App\GetFirstChar ($attrs[$i]);
            $match = new App\ListaMatches ($attr->getFirstChar());
            $atributo = App\CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
            $piezas[2] .= ' '.$atributo;
        }
        return App\Ensamblar::ensamblar( $piezas );
    }
}