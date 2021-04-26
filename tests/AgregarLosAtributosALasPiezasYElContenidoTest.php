<?php

use PHPUnit\Framework\TestCase;
use App\QuieroCrearUnaEtiqueta;
use App\CrearAtributosDeLaEtiqueta;
use App\AgregarLosAtributosALasPiezasYElContenido;

class AgregarLosAtributosALasPiezasYElContenidoTest extends TestCase {
    public function test_unir_etiqueta_atributos_contenido () {
        $etiqueta = new QuieroCrearUnaEtiqueta('html');
        $atributosDeLaEtiqueta = new CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new AgregarLosAtributosALasPiezasYElContenido('contenido');
        $this->assertIsArray( $piezasDeLaEtiqueta->unir( $etiqueta->listaDinamicaDeEtiquetasYpiezas([
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','0','>','1','<','/','html','>']
        ]) , $atributosDeLaEtiqueta->crearAtributos('len',[
            "l" => "lang=",
            "c" => "class=",
            "i" => "id=",
            "r" => "rel=",
            "h" => "href=",
            "s" => "src=",
            "d" => "defer",
            "cr" => "crossorigin="
        ]) ) );
        $this->assertEquals( '<html lang="en">contenido</html>' ,  implode("", $piezasDeLaEtiqueta->unir( $etiqueta->listaDinamicaDeEtiquetasYpiezas([
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','0','>','1','<','/','html','>']
        ]) , $atributosDeLaEtiqueta->crearAtributos('len',[
            "l" => "lang=",
            "c" => "class=",
            "i" => "id=",
            "r" => "rel=",
            "h" => "href=",
            "s" => "src=",
            "d" => "defer",
            "cr" => "crossorigin="
        ]) ) ) );
    }
}