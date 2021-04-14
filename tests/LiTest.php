<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Li;

class LiTest extends TestCase
{
    public function test_create_a_li()
    {
        $li = new Li;

        $this->assertEquals("<li ></li>", $li->tag());

    }
}