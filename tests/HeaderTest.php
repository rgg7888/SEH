<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Header;

class HeaderTest extends TestCase
{
    public function test_create_a_header()
    {
        $header = new Header;

        $this->assertEquals("<header ></header>", $header->tag());

    }
}