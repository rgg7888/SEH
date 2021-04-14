<?php

use PHPUnit\Framework\TestCase;
use App\Selector;
use App\MQuerie;

class MQuerieTest extends TestCase
{
    public function test_create_a_media_querie_rule()
    {
        $u = new Selector("*", ["0border-box","10","20"]);
        $html = new Selector("html",["362.5%","4'DM Sans', sans-serif"]);
        $mq = new MQuerie("600",[
            $u->create(),
            $html->create()
        ]);

        $this->assertEquals("@media screen and (max-width: 600px) {*{box-sizing: border-box;margin: 0;padding: 0;}html{font-size: 62.5%;font-family: 'DM Sans', sans-serif;}}", $mq->set());

    }
}