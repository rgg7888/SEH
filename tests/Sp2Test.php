<?php

use PHPUnit\Framework\TestCase;
use App\Selector;
use App\Sp2;

class Sp2Test extends TestCase
{
    public function test_create_a_selector_part_2()
    {
        $selector = new Sp2(".plans-container--card",[
            "0center"
        ]);

        $this->assertEquals(".plans-container--card{scroll-snap-align: center;}", $selector->create());

    }
}