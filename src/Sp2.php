<?php

namespace App;

class Sp2 extends Selector {

    public function whatItIs(char|string $char){
        return match($char){
            "0" => "scroll-snap-align: ",
            "1" => "available spot: ",
            "2" => "available spot: ",
            "3" => "available spot: ",
            "4" => "available spot: ",
            "5" => "available spot: ",
            "6" => "available spot: ",
            "7" => "available spot: ",
            "8" => "available spot: ",
            "9" => "available spot: ",
            "A" => "available spot: ",
            "B" => "available spot: ",
            "C" => "available spot: ",
            "D" => "available spot: ",
            "E" => "available spot: ",
            "F" => "available spot: ",
            "G" => "available spot: ",
            "H" => "available spot: ",
            "I" => "available spot: ",
            "J" => "available spot: ",
            "K" => "available spot: ",
            "L" => "available spot: ",
            "M" => "available spot: ",
            "N" => "available spot: ",
            "O" => "available spot: ",
            "P" => "available spot: ",
            "Q" => "available spot: ",
            "R" => "available spot: ",
            "S" => "available spot: ",
            "T" => "available spot: ",
            "U" => "available spot: ",
            "V" => "available spot: ",
            "X" => "available spot: ",
            "Y" => "available spot: ",
            "Z" => "available spot: "
        };
    }

}