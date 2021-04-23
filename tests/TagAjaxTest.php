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

    public function test_create_the_html_tag () {
        $html = new TagAjax ('html');
        $this->assertEquals ( '<html></html>', $html->imprime () );
    }

    public function test_create_the_html_tag_with_the_lang_en_attr () {
        $html = new TagAjax ('html',null,'len');
        $this->assertEquals ( '<html lang="en"></html>', $html->imprime () );
    }

}