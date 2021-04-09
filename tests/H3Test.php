<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\H3;

class H3Test extends TestCase
{
    public function test_create_a_h3()
    {
        $h3 = new H3;

        $this->assertEquals("<h3 ></h3>", $h3->tag());

    }
}