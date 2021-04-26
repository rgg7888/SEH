<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\H2;

class H2Test extends TestCase
{
    public function test_create_a_h2()
    {
        $h2 = new H2;

        $this->assertEquals("<h2 ></h2>", $h2->tag());

    }
}