<?php

if(!function_exists('doc')) {
    function doc (string|array|null $args = null) {
        $doctype = new App\Doctype($args);
        echo $doctype->tag();
    }
}

if(!function_exists('htm')) {
    function htm (string|array|null $args = null, string|array|null $func = null) {
        $html = new App\Html($args, $func);
        echo $html->tag();
    }
}

if(!function_exists('headt')) {
    function headt (string|array|null $args = null, string|array|null $func = null) {
        $head = new App\Head($args, $func);
        return $head->tag();
    }
}

if(!function_exists('bodyt')) {
    function bodyt (string|array|null $args = null, string|array|null $func = null) {
        $body = new App\Body($args, $func);
        return $body->tag();
    }
}