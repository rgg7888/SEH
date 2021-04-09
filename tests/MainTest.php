<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Main;

class MainTest extends TestCase
{
    public function test_create_a_main()
    {
        $main = new Main;

        $this->assertEquals("<main ></main>", $main->tag());

    }
}