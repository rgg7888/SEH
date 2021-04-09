<?php

use PHPUnit\Framework\TestCase;
use App\Selector;

class SelectorTest extends TestCase
{
    public function test_create_a_selector()
    {
        $selector = new Selector("*",[
            "Bborder-box",
            "M0",
            "P0"
        ]);

        $this->assertEquals("*{box-sizing: border-box;margin: 0;padding: 0;}", $selector->create());

    }
}