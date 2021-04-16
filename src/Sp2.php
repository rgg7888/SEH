<?php

namespace App;

class Sp2 extends Selector {

    public function whatItIs(char|string $char){
        return match($char){
            "0" => "scroll-snap-align: "/*,
            "1" => "margin: ",
            "2" => "padding: ",
            "3" => "font-size: ",
            "4" => "font-family: ",
            "5" => "font-weight: ",
            "6" => "line-height: ",
            "7" => "color: ",
            "8" => "position: ",
            "9" => "display: ",
            "A" => "flex-direction: ",
            "B" => "justify-content: ",
            "C" => "width: ",
            "D" => "min-width: ",
            "E" => "height: ",
            "F" => "text-align: ",
            "G" => "margin-top: ",
            "H" => "align-self: ",
            "I" => "max-width: ",
            "J" => "background: ",
            "K" => "top: ",
            "L" => "background-color: ",
            "M" => "box-shadow: ",
            "N" => "border: ",
            "O" => "border-radius: ",
            "P" => "text-decoration: ",
            "Q" => "left: ",
            "R" => "margin-left: ",
            "S" => "background-image: ",
            "T" => "padding-top: ",
            "U" => "padding-bottom: ",
            "V" => "margin-bottom: ",
            "X" => "background-size: ",
            "Y" => "background-position: ",
            "Z" => "background-repeat: "*/
        };
    }

}