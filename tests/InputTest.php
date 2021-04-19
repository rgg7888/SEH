<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Input;

class InputTest extends TestCase
{
    public function test_create_a_input()
    {
        $input = new Input();

        $this->assertEquals("<input />", $input->tag());

    }
}