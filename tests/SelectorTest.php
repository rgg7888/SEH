<?php

use PHPUnit\Framework\TestCase;
use App\Selector;

class SelectorTest extends TestCase
{
    public function test_create_a_selector()
    {
        $selector = new Selector("*",[
            "0border-box",
            "10",
            "20"
        ]);

        $this->assertEquals("*{box-sizing: border-box;margin: 0;padding: 0;}", $selector->create());

    }
}