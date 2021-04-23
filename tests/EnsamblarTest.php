<?php

use PHPUnit\Framework\TestCase;
use App\Ensamblar;
use App\IWantA;
use App\GetFirstChar;
use App\ListaMatches;
use App\CreateAttr;

class EnsamblarTest extends TestCase {
    public function test_create_tag () {
        $tag = new IWantA ('html');
        $piezas = $tag->iWantA();
        $attr = new GetFirstChar ('len');
        $match = new ListaMatches ($attr->getFirstChar());
        $atributo = CreateAttr::createAttr( $match->listaMatches() , $attr->getResto() );
        $piezas[2] = ' '.$atributo;
        $this->assertEquals( '<html lang="en">contenido</html>' , Ensamblar::ensamblar( $piezas , "contenido" ) );
    }
    public function test_create_tag_no_attr () {
        $tag = new IWantA ('html');
        $piezas = $tag->iWantA();
        $piezas[2] = "";
        $this->assertEquals( '<html>contenido</html>' , Ensamblar::ensamblar( $piezas , "contenido" ) );
    }
    public function test_create_empty_tag () {
        $tag = new IWantA ('html');
        $piezas = $tag->iWantA();
        $piezas[2] = "";
        $this->assertEquals( '<html></html>' , Ensamblar::ensamblar( $piezas ) );
    }
}