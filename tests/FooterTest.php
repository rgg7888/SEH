<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Footer;

class FooterTest extends TestCase
{
    public function test_create_a_footer()
    {
        $footer = new Footer;

        $this->assertEquals("<footer ></footer>", $footer->tag());

    }
}