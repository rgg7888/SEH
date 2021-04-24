<?php

namespace App;

class Ensamblar {
    public static function ensamblar ( array $piezas , string|null $content = null ) {
        $piezas[4] = $content;
        return implode("",$piezas);
    }
}