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

    public function test_unir_etiqueta_atributos_contenido_head() {

        $etiqueta = new QuieroCrearUnaEtiqueta('head');
        $atributosDeLaEtiqueta = new CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new AgregarLosAtributosALasPiezasYElContenido('contenido');

        $this->assertEquals( '<head>contenido</head>' ,  implode("", $piezasDeLaEtiqueta->unir( 
            $etiqueta->listaDinamicaDeEtiquetasYpiezas([
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','0','>','1','<','/','html','>'],
            'head' => ['<','head','>','1','<','/','head','>']
            ]) , $atributosDeLaEtiqueta->crearAtributos() 
        ) ) );

    }

    public function test_unir_etiqueta_atributos_contenido_title() {

        $etiqueta = new QuieroCrearUnaEtiqueta('title');
        $atributosDeLaEtiqueta = new CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new AgregarLosAtributosALasPiezasYElContenido('contenido');

        $this->assertEquals( '<title>contenido</title>' ,  implode("", $piezasDeLaEtiqueta->unir( 
            $etiqueta->listaDinamicaDeEtiquetasYpiezas([
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','0','>','1','<','/','html','>'],
            'head' => ['<','head','>','1','<','/','head','>'],
            'title' => ['<','title','>','1','<','/','title','>']
            ]) , $atributosDeLaEtiqueta->crearAtributos() 
        ) ) );

    }

    public function test_unir_etiqueta_atributos_contenido_body() {

        $etiqueta = new QuieroCrearUnaEtiqueta('body');
        $atributosDeLaEtiqueta = new CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new AgregarLosAtributosALasPiezasYElContenido('contenido');

        $this->assertEquals( '<body >contenido</body>' ,  implode("", $piezasDeLaEtiqueta->unir( 
            $etiqueta->listaDinamicaDeEtiquetasYpiezas([
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','0','>','1','<','/','html','>'],
            'head' => ['<','head','>','1','<','/','head','>'],
            'title' => ['<','title','>','1','<','/','title','>'],
            'body' => ['<','body ','0','>','1','<','/','body','>']
            ]) , $atributosDeLaEtiqueta->crearAtributos() 
        ) ) );

    }

    public function test_unir_etiqueta_atributos_contenido_meta() {

        $etiqueta = new QuieroCrearUnaEtiqueta('meta');
        $atributosDeLaEtiqueta = new CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new AgregarLosAtributosALasPiezasYElContenido();

        $this->assertEquals( '<meta charset="UTF-8"/>' ,  implode("", $piezasDeLaEtiqueta->unir( 
            $etiqueta->listaDinamicaDeEtiquetasYpiezas([
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','0','>','1','<','/','html','>'],
            'head' => ['<','head','>','1','<','/','head','>'],
            'meta' => ['<','meta ','0','/','>'],
            'title' => ['<','title','>','1','<','/','title','>'],
            'body' => ['<','body ','0','>','1','<','/','body','>']
            ]) , $atributosDeLaEtiqueta->crearAtributos('chUTF-8',[
                "l" => "lang=",
                "c" => "class=",
                "i" => "id=",
                "r" => "rel=",
                "h" => "href=",
                "s" => "src=",
                "d" => "defer",
                "cr" => "crossorigin=",
                "ch" => "charset="
            ],true) 
        ) ) );

    }

}