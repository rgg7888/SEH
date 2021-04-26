<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\JsFuncMaker;

class JsFuncMakerTest extends TestCase
{
    public function test_create_a_function_js()
    {
        $func = new JsFuncMaker("loadDoc");

        $this->assertEquals("function loadDoc(){var xhttp = new XMLHttpRequest();xhttp.onreadystatechange = function() {if (this.readyState == 4 && this.status == 200) {document.getElementById(\"demo\").innerHTML = this.responseText;}};xhttp.open(\"GET\", \"ajaxContent.php\", true);xhttp.send();}", $func->make($func->changeContent("demo","ajaxContent.php")));

    }

    public function test_http_object(){

        $objeto = new JsFuncMaker();

        $this->assertEquals("var xhttp = new XMLHttpRequest();", $objeto->httpObject("xhttp"));
    
    }

    public function test_create_a_event_ready_state(){

        $event = new JsFuncMaker();

        $this->assertEquals("xhttp.onreadystatechange = function() {};", $event->ors("xhttp"));

    }

    public function test_si(){

        $condition = new JsFuncMaker();

        $this->assertEquals("if (this.readyState == 4 && this.status == 200) {}", $condition->si("this.readyState == 4 && this.status == 200"));

    }

    public function test_response_innerHtml_text(){

        $htmlElement = new JsFuncMaker();

        $this->assertEquals("document.getElementById(\"demo\").innerHTML = this.responseText;", $htmlElement->ihr("demo"));

    }

    public function test_open_method_http_request(){

        $open = new JsFuncMaker();

        $this->assertEquals("xhttp.open(\"GET\", \"ajaxContent.php\", true);", $open->abrir("xhttp","GET", "ajaxContent.php", "true"));

    }

    public function enviar(){

        $send = new JsFuncMaker();

        $this->assertEquals("xhttp.send()", $send->enviar("xhttp"));

    }

}