<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Tfoot;

class TfootTest extends TestCase
{
    public function test_create_a_tfoot()
    {
        $tfoot = new Tfoot;

        $this->assertEquals("<tfoot ></tfoot>", $tfoot->tag());

    }
}