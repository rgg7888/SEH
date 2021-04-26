<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Title;

class TitleTest extends TestCase
{
    public function test_create_a_title()
    {
        $title = new Title(null,"Document");

        $this->assertEquals("<title >Document</title>", $title->tag());

    }
}