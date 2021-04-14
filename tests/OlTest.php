<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Ol;

class OlTest extends TestCase
{
    public function test_create_a_ol()
    {
        $ol = new Ol;

        $this->assertEquals("<ol ></ol>", $ol->tag());

    }
}