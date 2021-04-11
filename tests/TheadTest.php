<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Thead;

class TheadTest extends TestCase
{
    public function test_create_a_thead()
    {
        $thead = new Thead;

        $this->assertEquals("<thead ></thead>", $thead->tag());

    }
}