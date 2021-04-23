<?php

use PHPUnit\Framework\TestCase;
use App\TagAjax;

class TagAjaxTest extends TestCase {

    public function test_create_the_doctype_tag () {
        $doctype = new TagAjax ('!');
        $this->assertEquals ( '<!DOCTYPE html>', $doctype->imprime () );
    }

    public function test_create_the_doctype_tag_starting_null () {
        $doctype = new TagAjax ();
        $this->assertEquals ( '<!DOCTYPE html>', $doctype->imprime () );
    }

}