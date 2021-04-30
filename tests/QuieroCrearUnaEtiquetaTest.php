<?php

use PHPUnit\Framework\TestCase;
use App\QuieroCrearUnaEtiqueta;

class QuieroCrearUnaEtiquetaTest extends TestCase {
    public function test_determinar_etiqueta () {
        $html = new QuieroCrearUnaEtiqueta('html');
        $div = new QuieroCrearUnaEtiqueta('div');
        $this->assertEquals('<html lang="en"><div id="myid" class="myclass">contenido</div></html>', $html->construirEtiqueta($div->construirEtiqueta("contenido","id:myid|class:myclass"),"lang:en"));
    }
}