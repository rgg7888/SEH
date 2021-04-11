<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Tbody;

class TbodyTest extends TestCase
{
    public function test_create_a_tbody()
    {
        $tbody = new Tbody;

        $this->assertEquals("<tbody ></tbody>", $tbody->tag());

    }
}