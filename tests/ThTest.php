<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Th;

class ThTest extends TestCase
{
    public function test_create_a_th()
    {
        $th = new Th;

        $this->assertEquals("<th ></th>", $th->tag());

    }
}