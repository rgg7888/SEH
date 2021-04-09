<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Doctype;

class DoctypeTest extends TestCase
{
    public function test_create_a_doctype()
    {
        $doctype = new Doctype("H");

        $this->assertEquals("<!DOCTYPE html />", $doctype->tag());

    }
}