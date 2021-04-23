<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Hr;

class HrTest extends TestCase
{
    public function test_create_a_hr()
    {
        $hr = new Hr();

        $this->assertEquals("<hr />", $hr->tag());

    }
}