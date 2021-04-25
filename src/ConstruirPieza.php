<?php

namespace App;

class ConstruirPieza {
    public static function ensamblar ( array $piezas ) {
        return implode("",$piezas);
    }
}