<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Table;

class TableTest extends TestCase
{
    public function test_create_a_table()
    {
        $table = new Table;

        $this->assertEquals("<table ></table>", $table->tag());

    }
}