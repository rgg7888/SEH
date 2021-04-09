<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\A;

class ATest extends TestCase
{
    public function test_create_a_a()
    {
        $a = new A("H#","link");

        $this->assertEquals("<a href=\"#\">link</a>", $a->tag());

    }
}