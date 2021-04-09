<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\P;

class PTest extends TestCase
{
    public function test_create_a_p()
    {
        $p = new P;

        $this->assertEquals("<p ></p>", $p->tag());

    }
}