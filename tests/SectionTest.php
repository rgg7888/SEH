<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Section;

class SectionTest extends TestCase
{
    public function test_create_a_section()
    {
        $section = new Section;

        $this->assertEquals("<section ></section>", $section->tag());

    }
}