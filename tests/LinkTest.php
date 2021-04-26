<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Link;

class LinkTest extends TestCase
{
    public function test_create_a_link()
    {
        $link = new Link("Hhttps://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500;900&display=swap Rstylesheet");

        $this->assertEquals("<link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500;900&display=swap\" rel=\"stylesheet\" />", $link->tag());

    }
}