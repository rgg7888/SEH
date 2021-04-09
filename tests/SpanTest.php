<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Span;

class SpanTest extends TestCase
{
    public function test_create_a_span()
    {
        $span = new Span;

        $this->assertEquals("<span ></span>", $span->tag());

    }
}