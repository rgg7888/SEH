<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\H4;

class H4Test extends TestCase
{
    public function test_create_a_h4()
    {
        $h4 = new H4;

        $this->assertEquals("<h4 ></h4>", $h4->tag());

    }
}