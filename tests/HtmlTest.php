<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Html;

class HtmlTest extends TestCase
{
    public function test_create_a_html()
    {
        $html = new Html;

        $this->assertEquals("<html ></html>", $html->tag());

        $html2 = new Html("Len", "Soy la etiqueta container");

        $this->assertEquals("<html lang=\"en\">Soy la etiqueta container</html>", $html2->tag());

    }
}