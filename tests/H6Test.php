<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\H6;

class H6Test extends TestCase
{
    public function test_create_a_h6()
    {
        $h6 = new H6;

        $this->assertEquals("<h6 ></h6>", $h6->tag());

    }
}