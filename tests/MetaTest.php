<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Meta;

class MetaTest extends TestCase
{
    public function test_create_a_meta_charset()
    {
        $charset = new Meta("CUTF-8");

        $this->assertEquals("<meta charset=\"UTF-8\" />", $charset->tag());

    }

    public function test_create_a_meta_view_port()
    {
        $charset = new Meta("Nviewport cwidth=device-width,initial-scale=1.0");

        $this->assertEquals("<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\" />", $charset->tag());

    }
}