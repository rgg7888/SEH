<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Td;

class TdTest extends TestCase
{
    public function test_create_a_td()
    {
        $td = new Td;

        $this->assertEquals("<td ></td>", $td->tag());

    }
}