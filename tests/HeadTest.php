<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Head;

class HeadTest extends TestCase
{
    public function test_create_a_head()
    {
        $head = new Head;

        $this->assertEquals("<head ></head>", $head->tag());

    }
}