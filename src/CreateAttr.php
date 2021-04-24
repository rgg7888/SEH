<?php

namespace App;

class CreateAttr {
    public static function createAttr ( string $key , string|null $value = null ) {
        if (str_contains($key,'"')) {
            return $key.$value.'"';
        }else{
            return $key;
        }
    }
}