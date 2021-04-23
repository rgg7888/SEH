<?php

use PHPUnit\Framework\TestCase;
use App\ListaMatches;

class ListaMatchesTest extends TestCase {
    public function test_obtener_match_exclamation () {
        $match = new ListaMatches ('!');
        $this->assertEquals( '<!DOCTYPE html>' , $match->listaMatches() );
    }
    public function test_obtener_match_l () {
        $match = new ListaMatches ('l');
        $this->assertEquals( 'lang="' , $match->listaMatches() );
    }
    public function test_obtener_match_error () {
        $match = new ListaMatches ();
        $this->assertEquals( 'noHayMatches' , $match->listaMatches() );
    }
}