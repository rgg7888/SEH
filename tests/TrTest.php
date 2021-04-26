<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Tr;

class TrTest extends TestCase
{
    public function test_create_a_tr()
    {
        $tr = new Tr;

        $this->assertEquals("<tr ></tr>", $tr->tag());

    }
}