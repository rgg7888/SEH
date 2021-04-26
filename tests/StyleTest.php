<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Style;

class StyleTest extends TestCase
{
    public function test_create_a_style()
    {
        $style = new Style;

        $this->assertEquals("<style ></style>", $style->tag());

    }
}