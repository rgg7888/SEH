<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Div;

class DivTest extends TestCase
{
    public function test_create_a_div()
    {
        $div = new Div;

        $this->assertEquals("<div ></div>", $div->tag());

        $div2 = new Div("Cclase", "Soy un div");

        $this->assertEquals("<div class=\"clase\">Soy un div</div>", $div2->tag());

    }
}