<?php

use PHPUnit\Framework\TestCase;
use App\QuieroCrearUnaEtiqueta;

class QuieroCrearUnaEtiquetaTest extends TestCase {
    public function test_determinar_etiqueta () {
        $etiqueta = new QuieroCrearUnaEtiqueta('doctype');
        $this->assertEquals( '<!DOCTYPE html>' , implode( "" , $etiqueta->crearPiezas() ) );
    }
}