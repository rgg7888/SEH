<?php

use PHPUnit\Framework\TestCase;
use App\CrearAtributosDeLaEtiqueta;

class CrearAtributosDeLaEtiquetaTest extends TestCase {
    public function test_crear_atributos_etiqueta () {
        $etiqueta = new CrearAtributosDeLaEtiqueta();
        $this->assertEquals( 'len' ,  $etiqueta->separarAtributos('len') );
        $this->assertIsArray( $etiqueta->separarAtributos('len|imyId') );
        #$this->assertEquals( 'string' , $etiqueta->dividirAtributosIndividualmente( $etiqueta->separarAtributos('len') )[0] );
        #$this->assertEquals( 'array' , $etiqueta->dividirAtributosIndividualmente( $etiqueta->separarAtributos('len|imyId') )[0] );
        $this->assertIsArray( $etiqueta->dividirAtributosIndividualmente( $etiqueta->separarAtributos('len') ) );
        #$this->assertEquals( 'recibi un string' , $etiqueta->dividirAtributosIndividualmente( $etiqueta->separarAtributos('len') )[1] );
        #$this->assertEquals( 'recibi un array' , $etiqueta->dividirAtributosIndividualmente( $etiqueta->separarAtributos('len|imyId') )[1] );
        $this->assertEquals( 'l' ,  $etiqueta->dividirAtributosIndividualmente( $etiqueta->separarAtributos('len') )[0][0] );
        $this->assertEquals( 'en' ,  $etiqueta->dividirAtributosIndividualmente( $etiqueta->separarAtributos('len') )[0][1] );
        $this->assertEquals( 'lang="en"' ,  $etiqueta->crearAtributos('len') );
        $this->assertEquals( 'class="myClass"id="myId"' ,  $etiqueta->crearAtributos('cmyClass|imyId') );
        $this->assertEquals( '' ,  $etiqueta->crearAtributos() );
    }
}