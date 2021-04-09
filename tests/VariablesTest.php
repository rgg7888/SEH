<?php

use PHPUnit\Framework\TestCase;
use App\Variables;

class VariablesTest extends TestCase
{
    public function test_create_a_variable()
    {
        $colores = new Variables([
            "bitcoin-orange" => "#f7931a",
            "soft-orange" => "#ffe9d5",
            "secondary-blue" => "#1a9af7",
            "soft-blue" => "#E7F5FF",
            "warm-black" => "#201E1C",
            "black" => "#282623",
            "grey" => "#BABABA",
            "off-white" => "#FAF8F7",
            "just-white" => "#fff"
        ]);

        $this->assertEquals(":root{--bitcoin-orange: #f7931a;--soft-orange: #ffe9d5;--secondary-blue: #1a9af7;--soft-blue: #E7F5FF;--warm-black: #201E1C;--black: #282623;--grey: #BABABA;--off-white: #FAF8F7;--just-white: #fff;}", $colores->create());

    }
}