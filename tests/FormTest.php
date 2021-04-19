<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Form;

class FormTest extends TestCase
{
    public function test_create_a_form()
    {
        $form = new Form;

        $this->assertEquals("<form ></form>", $form->tag());

    }
}