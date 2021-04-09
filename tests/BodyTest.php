<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Body;

class BodyTest extends TestCase
{
    public function test_create_a_body()
    {
        $body = new Body;

        $this->assertEquals("<body ></body>", $body->tag());

    }
}