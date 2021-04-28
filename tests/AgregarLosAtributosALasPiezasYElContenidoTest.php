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
            'html' => ['<','html ','@','>','#','<','/','html','>']
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
        $json = '{
            "doctype": ["<","!DOCTYPE"," html",">"],
            "html": ["<","html ","@",">","#","<","/","html",">"],
            "head": ["<","head",">","#","<","/","head",">"],
            "meta": ["<","meta ","@","/",">"],
            "title": ["<","title",">","#","<","/","title",">"],
            "body": ["<","body ","@",">","#","<","/","body",">"],
            "h1": ["<","h1 ","@",">","#","<","/","h1",">"],
            "br": ["<","br","/>"]
        }';
        $this->assertEquals( '<html lang="en">contenido</html>' ,  
        implode("", $piezasDeLaEtiqueta->unir( 
            $etiqueta->listaDinamicaDeEtiquetasYpiezas(json_decode($json,true)) , 
            $atributosDeLaEtiqueta->crearAtributos('len',[
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
            'html' => ['<','html ','@','>','#','<','/','html','>'],
            'head' => ['<','head','>','#','<','/','head','>']
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
            'html' => ['<','html ','@','>','#','<','/','html','>'],
            'head' => ['<','head','>','#','<','/','head','>'],
            'title' => ['<','title','>','#','<','/','title','>']
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
            'html' => ['<','html ','@','>','#','<','/','html','>'],
            'head' => ['<','head','>','#','<','/','head','>'],
            'meta' => ['<','meta ','@','/','>'],
            'title' => ['<','title','>','#','<','/','title','>'],
            'body' => ['<','body ','@','>','#','<','/','body','>']
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

    public function test_unir_etiqueta_atributos_contenido_body() {

        $etiqueta = new QuieroCrearUnaEtiqueta('body');
        $atributosDeLaEtiqueta = new CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new AgregarLosAtributosALasPiezasYElContenido('contenido');

        $this->assertEquals( '<body >contenido</body>' ,  implode("", $piezasDeLaEtiqueta->unir( 
            $etiqueta->listaDinamicaDeEtiquetasYpiezas([
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','@','>','#','<','/','html','>'],
            'head' => ['<','head','>','#','<','/','head','>'],
            'title' => ['<','title','>','#','<','/','title','>'],
            'body' => ['<','body ','@','>','#','<','/','body','>']
            ]) , $atributosDeLaEtiqueta->crearAtributos() 
        ) ) );

    }

    public function test_unir_etiqueta_atributos_contenido_h1() {

        $etiqueta = new QuieroCrearUnaEtiqueta('h1');
        $atributosDeLaEtiqueta = new CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new AgregarLosAtributosALasPiezasYElContenido('contenido');

        $this->assertEquals( '<h1 >contenido</h1>' ,  implode("", $piezasDeLaEtiqueta->unir( 
            $etiqueta->listaDinamicaDeEtiquetasYpiezas([
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','@','>','#','<','/','html','>'],
            'head' => ['<','head','>','#','<','/','head','>'],
            'title' => ['<','title','>','#','<','/','title','>'],
            'body' => ['<','body ','@','>','#','<','/','body','>'],
            'h1' => ['<','h1 ','@','>','#','<','/','h1','>']
            ]) , $atributosDeLaEtiqueta->crearAtributos() 
        ) ) );

    }

}