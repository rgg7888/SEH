<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\H5;

class H5Test extends TestCase
{
    public function test_create_a_h5()
    {
        $h5 = new H5;

        $this->assertEquals("<h5 ></h5>", $h5->tag());

    }
}