<?php

namespace App;

class Ensamblar {
    public static function ensamblar ( array $piezas , string|array|null $content = null ) {
        if ( is_array($content) ) {
            $content = implode("",$content);
        }
        $piezas[4] = $content;
        return implode("",$piezas);
    }
}