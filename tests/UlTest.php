<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Ul;

class UlTest extends TestCase
{
    public function test_create_a_ul()
    {
        $ul = new Ul;

        $this->assertEquals("<ul ></ul>", $ul->tag());

    }
}