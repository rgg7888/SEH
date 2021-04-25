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
        $this->assertIsArray( $piezasDeLaEtiqueta->unir( $etiqueta->crearPiezas() , $atributosDeLaEtiqueta->crearAtributos('len') ) );
        $this->assertEquals( '<html lang="en">contenido</html>' ,  implode("", $piezasDeLaEtiqueta->unir( $etiqueta->crearPiezas() , $atributosDeLaEtiqueta->crearAtributos('len') ) ) );
    }
}