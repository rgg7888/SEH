<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\H1;

class H1Test extends TestCase
{
    public function test_create_a_h1()
    {
        $h1 = new H1;

        $this->assertEquals("<h1 ></h1>", $h1->tag());

    }
}