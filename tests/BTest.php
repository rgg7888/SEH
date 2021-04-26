<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\B;

class BTest extends TestCase
{
    public function test_create_a_b()
    {
        $b = new B;

        $this->assertEquals("<b ></b>", $b->tag());

    }
}