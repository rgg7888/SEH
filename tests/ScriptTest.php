<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Script;

class ScriptTest extends TestCase
{
    public function test_create_a_script()
    {
        $script = new Script();

        $this->assertEquals("<script ></script>", $script->tag());

    }
}