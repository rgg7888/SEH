<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Button;

class ButtonTest extends TestCase
{
    public function test_create_a_button()
    {
        $button = new Button("Tbutton OloadDoc()","Change Content");

        $this->assertEquals("<button type=\"button\" onclick=\"loadDoc()\">Change Content</button>", $button->tag());

    }
}