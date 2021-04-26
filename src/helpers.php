<?php

/**
 * Hypertext Markup Language (html)
 * Lenguaje de marcado de hipertexto (lmh)
 */

 if(!function_exists('doctype')) {
     function doctype() {
         $tag = new App\IWantA('doctype');
         $piezas = $tag->iWantA();
         echo App\Ensamblar::ensamblar( $piezas );
     }
 }

if(!function_exists('lmh')) {
    function lmh ( string|array|null $content = null , string|null $attr = null ) {
        
        if ( is_array($content) ) {
            $content = implode("",$content);
        }
        
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
        if ( is_array($content) ) {
            $content = implode("",$content);
        }
        $tag = new App\IWantA ('head');
        $piezas = $tag->iWantA();
        $piezas[2] = '';
        return App\Ensamblar::ensamblar( $piezas , $content );
    }
}

if(!function_exists('body')) {
    function body ( string|array|null $content = null , string|null $attr = null ) {
        
        if ( is_array($content) ) {
            $content = implode("",$content);
        }
        
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

        $evaluarAttributos = true;
        
        if ( is_array($content) ) {
            $evaluarAttributos = end($content);
            $content = implode("",$content);
        }
        
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
        if($evaluarAttributos) {

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

        }
        
        return App\Ensamblar::ensamblar( $piezas , $content );
    }
}

if(!function_exists('button')) {
    function button ( string|array|null $content = null , string|null $attr = null ) {
        
        if ( is_array($content) ) {
            $content = implode("",$content);
        }
        
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
        
        if ( is_array($content) ) {
            $content = implode("",$content);
        }
        
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
        
        if ( is_array($content) ) {
            $content = implode("",$content);
        }
        
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

#spanish version mas fino que nunca =)

if(!function_exists('pagina')) {
    function pagina($contenido = null,string $atributos = null) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('doctype');
        $piezas = $etiqueta->crearPiezas();
        echo App\ConstruirPieza::ensamblar( $piezas );
        $etiqueta->crearEtiqueta('html');
        $piezas = $etiqueta->crearPiezas();
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
        echo App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( $piezas , $atributosDeLaEtiqueta->crearAtributos($atributos) ) );
    }
}

if(!function_exists('data_base_emulation')) {
    function data_base_emulation() {
        return [
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','0','>','1','<','/','html','>']
        ];
    }
}

if(!function_exists('my_site')) {
    function my_site($contenido = null,string $atributos = null) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('doctype');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        echo App\ConstruirPieza::ensamblar( $piezas );
        $etiqueta->crearEtiqueta('html');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
        echo App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( $piezas , $atributosDeLaEtiqueta->crearAtributos($atributos) ) );
    }
}

if(!function_exists('get_simple')) {
    /**
     * el numero de eventos debe de coincidir con el numero de elementos
     * en cada uno de los arrays y, los ids deben coincidir con los 
     * asignados en el documento html.
     */
    function get_simple(int $eventos,array $botones,array $ids,array $funciones,string $url) {
        $eventosClick = new App\CrearEventosClick($eventos,$botones,$ids,$funciones);
        return $eventosClick->obtenerDatosGetSuperSimple($url,$eventosClick->escribirScript());
    }
}

#funciones de la version 0.0.1

if(!function_exists('doctype')) {
    function doctype (string|array|null $args = "H") {
        $doctype = new App\Doctype($args);
        echo $doctype->tag();
    }
}

if(!function_exists('html')) {
    function html (string|array|null $args = null, string|array|null $func = null) {
        $html = new App\Html($args, $func);
        echo $html->tag();
    }
}

if(!function_exists('head')) {
    function head (string|array|null $args = null, string|array|null $func = null) {
        $head = new App\Head($args, $func);
        return $head->tag();
    }
}

if(!function_exists('body')) {
    function body (string|array|null $args = null, string|array|null $func = null) {
        $body = new App\Body($args, $func);
        return $body->tag();
    }
}

if(!function_exists('div')) {
    function div (string|array|null $args = null, string|array|null $func = null) {
        $div = new App\Div($args, $func);
        return $div->tag();
    }
}

if(!function_exists('address')) {
    function address (string|array|null $args = null, string|array|null $func = null) {
        $address = new App\Address($args, $func);
        return $address->tag();
    }
}

if(!function_exists('title')) {
    function title (string|array|null $args = null, string|array|null $func = null) {
        $title = new App\Title($args, $func);
        return $title->tag();
    }
}
#esta funcion se redujo de header a hdr para evitar conflicto con la funcion header de php

if(!function_exists('hdr')) {
    function hdr (string|array|null $args = null, string|array|null $func = null) {
        $header = new App\Header($args, $func);
        return $header->tag();
    }
}

if(!function_exists('main')) {
    function main (string|array|null $args = null, string|array|null $func = null) {
        $main = new App\Main($args, $func);
        return $main->tag();
    }
}

if(!function_exists('section')) {
    function section (string|array|null $args = null, string|array|null $func = null) {
        $section = new App\Section($args, $func);
        return $section->tag();
    }
}

if(!function_exists('footer')) {
    function footer (string|array|null $args = null, string|array|null $func = null) {
        $footer = new App\Footer($args, $func);
        return $footer->tag();
    }
}

if(!function_exists('style')) {
    function style (string|array|null $args = null, string|array|null $func = null) {
        $style = new App\Style($args, $func);
        return $style->tag();
    }
}

if(!function_exists('p')) {
    function p (string|array|null $args = null, string|array|null $func = null) {
        $p = new App\P($args, $func);
        return $p->tag();
    }
}

if(!function_exists('a')) {
    function a (string|array|null $args = null, string|array|null $func = null) {
        $a = new App\A($args, $func);
        return $a->tag();
    }
}

if(!function_exists('h1')) {
    function h1 (string|array|null $args = null, string|array|null $func = null) {
        $h1 = new App\H1($args, $func);
        return $h1->tag();
    }
}

if(!function_exists('h2')) {
    function h2 (string|array|null $args = null, string|array|null $func = null) {
        $h2 = new App\H2($args, $func);
        return $h2->tag();
    }
}

if(!function_exists('h3')) {
    function h3 (string|array|null $args = null, string|array|null $func = null) {
        $h3 = new App\H3($args, $func);
        return $h3->tag();
    }
}

if(!function_exists('h4')) {
    function h4 (string|array|null $args = null, string|array|null $func = null) {
        $h4 = new App\H4($args, $func);
        return $h4->tag();
    }
}

if(!function_exists('h5')) {
    function h5 (string|array|null $args = null, string|array|null $func = null) {
        $h5 = new App\H5($args, $func);
        return $h5->tag();
    }
}

if(!function_exists('h6')) {
    function h6 (string|array|null $args = null, string|array|null $func = null) {
        $h6 = new App\H6($args, $func);
        return $h6->tag();
    }
}

if(!function_exists('span')) {
    function span (string|array|null $args = null, string|array|null $func = null) {
        $span = new App\Span($args, $func);
        return $span->tag();
    }
}

if(!function_exists('button')) {
    function button (string|array|null $args = null, string|array|null $func = null) {
        $button = new App\Button($args, $func);
        return $button->tag();
    }
}

if(!function_exists('script')) {
    function script (string|array|null $args = null, string|array|null $func = null) {
        $script = new App\Script($args, $func);
        return $script->tag();
    }
}

if(!function_exists('table')) {
    function table (string|array|null $args = null, string|array|null $func = null) {
        $table = new App\Table($args, $func);
        return $table->tag();
    }
}

if(!function_exists('tr')) {
    function tr (string|array|null $args = null, string|array|null $func = null) {
        $tr = new App\Tr($args, $func);
        return $tr->tag();
    }
}

if(!function_exists('td')) {
    function td (string|array|null $args = null, string|array|null $func = null) {
        $td = new App\Td($args, $func);
        return $td->tag();
    }
}

if(!function_exists('th')) {
    function th (string|array|null $args = null, string|array|null $func = null) {
        $th = new App\Th($args, $func);
        return $th->tag();
    }
}

if(!function_exists('thead')) {
    function thead (string|array|null $args = null, string|array|null $func = null) {
        $thead = new App\Thead($args, $func);
        return $thead->tag();
    }
}

if(!function_exists('tbody')) {
    function tbody (string|array|null $args = null, string|array|null $func = null) {
        $tbody = new App\Tbody($args, $func);
        return $tbody->tag();
    }
}

if(!function_exists('tfoot')) {
    function tfoot (string|array|null $args = null, string|array|null $func = null) {
        $tfoot = new App\Tfoot($args, $func);
        return $tfoot->tag();
    }
}

if(!function_exists('b')) {
    function b (string|array|null $args = null, string|array|null $func = null) {
        $b = new App\B($args, $func);
        return $b->tag();
    }
}

if(!function_exists('article')) {
    function article (string|array|null $args = null, string|array|null $func = null) {
        $article = new App\Article($args, $func);
        return $article->tag();
    }
}

if(!function_exists('ul')) {
    function ul (string|array|null $args = null, string|array|null $func = null) {
        $ul = new App\Ul($args, $func);
        return $ul->tag();
    }
}

if(!function_exists('ol')) {
    function ol (string|array|null $args = null, string|array|null $func = null) {
        $ol = new App\Ol($args, $func);
        return $ol->tag();
    }
}

if(!function_exists('li')) {
    function li (string|array|null $args = null, string|array|null $func = null) {
        $li = new App\Li($args, $func);
        return $li->tag();
    }
}

#selfClosing Tags

if(!function_exists('img')) {
    function img (string|array|null $args = null) {
        $img = new App\Img($args);
        return $img->tag();
    }
}

if(!function_exists('meta')) {
    function meta (string|array|null $args = null) {
        $meta = new App\Meta($args);
        return $meta->tag();
    }
}
#para evitar conflictos con la funcion link de php utilizamos el nombre lk
if(!function_exists('lk')) {
    function lk (string|array|null $args = null) {
        $link = new App\Link($args);
        return $link->tag();
    }
}

#css functions

if(!function_exists('vars')) {
    function vars (array|null $vars = null) {
        $vars = new App\Variables($vars);
        return $vars->create();
    }
}

if(!function_exists('sltr')) {
    function sltr (string|null $id, array|null $rules = null) {
        $selector = new App\Selector($id, $rules);
        return $selector->create();
    }
}

if(!function_exists('sltr2')) {
    function sltr2 (string|null $id, array|null $rules = null) {
        $selector = new App\Sp2($id, $rules);
        return $selector->create();
    }
}

if(!function_exists('unirStyles')) {
    function unirStyles(array $styles) {
        
        $sltr = new App\Sp2();
        
        return $sltr->unirStyles($styles);
    }
}

if(!function_exists('mq')) {
    function mq (string|null $size, array|null $selectores = null) {
        $mq = new App\MQuerie($size, $selectores);
        return $mq->set();
    }
}

#clean function 

if(!function_exists('cls')) {
    function cls (string $cadena, string $separador = "_") {
        $clean = new App\Base();
        return $clean->clean($cadena, $separador);
    }
}

#data base functions

if(!function_exists('mysqli')) {
    function mysqli(string $server, string $username, string $password){
        $mysqli = new App\DataBase($server,$username,$password,"mysqli");
        $mysqli->connect();
        return $mysqli->getConexion();
    }
}

if(!function_exists('createDbM')) {
    function createDbM(string $server, string $username, string $password, string $dbname){
        $mysqli = new App\DataBase($server,$username,$password,"mysqli");
        $mysqli->connect();
        $conn = $mysqli->getConexion();
        $mysqli->createDb($conn,$dbname);
    }
}

if(!function_exists('pdo')) {
    function pdo(string $server, string $dbname, string $username, string $password){
        $pdo = new App\DataBase($server,$username,$password,"pdo");
        $pdo->connect($dbname);
        return $pdo->getConexion();
    }
}

if(!function_exists('createDbP')) {
    function createDbP(string $server, string $username, string $password, string $dbname){
        $pdo = new App\DataBase($server,$username,$password,"pdo");
        $pdo->connect();
        $conn = $pdo->getConexion();
        $pdo->createDb($conn,$dbname);
    }
}