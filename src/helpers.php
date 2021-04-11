<?php

if(!function_exists('doctype')) {
    function doctype (string|array|null $args = null) {
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

if(!function_exists('changeContentOf')) {
    function changeContentOf (string $elementId, string $fileName) {
        $changeContent = new App\JsFuncMaker("loadDoc");
        return $changeContent->make($changeContent->changeContent($elementId,$fileName));
    }
}

if(!function_exists('jfm')) {
    function jsm (string $functionName) {
        return $changeContent = new App\JsFuncMaker($functionName);
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