<?php

namespace App;

class Sp2 extends Selector {

    public function whatItIs(char|string $char){
        return match($char){
            "0" => "scroll-snap-align: "
        };
    }

}