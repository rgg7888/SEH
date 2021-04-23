<?php

namespace App;

class CreateAttr {
    public static function createAttr ( string $key , string $value ) {
        return $key.$value.'"';
    }
}