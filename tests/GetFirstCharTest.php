<?php

use PHPUnit\Framework\TestCase;
use App\GetFirstChar;

class GetFirstCharTest extends TestCase {
    public function test_obtener_primer_letra () {
        $letra = new GetFirstChar ('len');
        $this->assertEquals( 'l' , $letra->getFirstChar() );
    }
    public function test_obtener_resto_del_string () {
        $resto = new GetFirstChar ('len');
        $this->assertEquals( 'en' , $resto->getResto() );
    }
}