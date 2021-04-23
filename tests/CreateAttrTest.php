<?php

use PHPUnit\Framework\TestCase;
use App\CreateAttr;
use App\ListaMatches;
use App\GetFirstChar;

class CreateAttrTest extends TestCase {
    public function test_create_atributo () {
        $letra = new GetFirstChar ('len');
        $match = new ListaMatches ($letra->getFirstChar());
        $this->assertEquals( 'lang="en"' , CreateAttr::createAttr( $match->listaMatches() , $letra->getResto() ) );
    }
}