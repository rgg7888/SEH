<?php

//@@@###@@@### -> Utileria

if(!function_exists('data_base_emulation')) {
    function data_base_emulation() {
        return [
            'doctype' => ['<','!DOCTYPE',' html','>'],
            'html' => ['<','html ','@','>','#','<','/','html','>'],
            'head' => ['<','head','>','#','<','/','head','>'],
            'meta' => ['<','meta ','@','/','>'],
            'title' => ['<','title','>','#','<','/','title','>'],
            'body' => ['<','body ','@','>','#','<','/','body','>'],
            'h1' => ['<','h1 ','@','>','#','<','/','h1','>'],
            'br' => ['<','br','/>']
        ];
    }
}

if(!function_exists('data_base_emulation_atributos')) {
    function data_base_emulation_atributos() {
        return [
            "l" => "lang=",
            "c" => "class=",
            "i" => "id=",
            "r" => "rel=",
            "h" => "href=",
            "s" => "src=",
            "d" => "defer",
            "cr" => "crossorigin=",
            "ch" => "charset="
        ];
    }
}

if(!function_exists('es_cadena_de_atributos')) {
    function es_cadena_de_atributos($contenido,$piezas,$atributosDeLaEtiqueta,$cambiarNivel) {
        /**
             * habra ocasiones en las que estemos trabajando con 
             * javascript y el contenido de las etiquetas
             * se lo agreguemos con javascript, entonces
             * solo necesitaremos crear el tag con algun
             * identificador ya sea una clase o un id
             * 
             * como observamos en la siguiente linea recibimos el 
             * contenido, este puede ser un array o un string
             * cuando es un array se asumira que se pasara directo
             * al constructor de la clase : 
             * AgregarLosAtributosALasPiezasYElContenido
             * 
             * pero cuando sea un string existe la posibilidad
             * de que el usuario ingrese valores correspondientes
             * a algun atributo, entonces antes de pasar la variabe
             * contenido al constructor lo primero sera 
             * verificar si es o no un string
             */

            //validamos si es un string
            if(is_string($contenido)) {
                /**
                 * si entra a esta condicion 
                 * quiere decir que si estamos 
                 * recibiendo un string dentro
                 * de la variable contenido
                 * el siguiente paso es verificar
                 * que este string no corresponda 
                 * a una cadena de atributos.
                 * 
                 * para comprobar si lo que 
                 * recibimos es simplemente un
                 * string o una cadena de caracteres
                 * vamos a utilizar la funcion :
                 * dividirAtributosIndividualmente()
                 * y la funcion :
                 * separarAtributos()
                 * 
                 * estas funciones en caso de encontrar
                 * alguna coincidencia devolveran un array
                 * de lo contrario devolveran null 
                 * 
                 * entonces hacemos la comprobacion :
                 */


                if(is_array(dividirAtributosIndividualmente(
                    separarAtributos($contenido)
                ))){
                    /**
                     * si es array entonces quiere decir
                     * que recibimos una cadena de 
                     * atributos, por lo tanto el flujo
                     * sera :
                     * en el constructor lo dejaremos
                     * vacio y en la funcion 
                     * crearAtributos()
                     * no le pasamos la variable atributos
                     * en cambio le pasamos la variable 
                     * contenido
                     */
                    $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido();
                    return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
                        $piezas , $atributosDeLaEtiqueta->crearAtributos(
                            $contenido , 
                            data_base_emulation_atributos() , 
                            $cambiarNivel 
                        ) 
                    ) );
                }else{
                    /**
                     * si no es un array continuamos
                     * con el flujo normal
                     */
                    $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
                    return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
                        $piezas , $atributosDeLaEtiqueta->crearAtributos(
                            $atributos , 
                            data_base_emulation_atributos() , 
                            $cambiarNivel 
                        ) 
                    ) );
                }

            }else{
                /**
                 * si no es string tambien continuamos con el
                 * flujo normal
                 */
                $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
                return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
                    $piezas , $atributosDeLaEtiqueta->crearAtributos(
                        $atributos , 
                        data_base_emulation_atributos() , 
                        $cambiarNivel 
                    ) 
                ) );
            }
    }
}

//@@@###@@@### -> Etiquetas

if(!function_exists('pagina')) {
    function pagina($contenido = null,string $atributos = null , $cambiarNivel = false) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('doctype');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        echo App\ConstruirPieza::ensamblar( $piezas );
        $etiqueta->crearEtiqueta('html');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
        echo App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
            $piezas , $atributosDeLaEtiqueta->crearAtributos(
                $atributos , 
                data_base_emulation_atributos() , 
                $cambiarNivel 
            ) 
        ) );
    }
}

if(!function_exists('head')) {
    function head($contenido = null) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('head');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
        return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
            $piezas , $atributosDeLaEtiqueta->crearAtributos(
                $atributos , 
                data_base_emulation_atributos() , 
                $cambiarNivel 
            ) 
        ) );
    }
}

if(!function_exists('meta')) {
    function meta(string $atributos = null , $cambiarNivel = false) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('meta');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido();
        return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
            $piezas , $atributosDeLaEtiqueta->crearAtributos(
                $atributos , 
                data_base_emulation_atributos() , 
                $cambiarNivel 
            ) 
        ) );
    }
}

if(!function_exists('title')) {
    function title($contenido = null) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('title');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();
        $piezasDeLaEtiqueta = new App\AgregarLosAtributosALasPiezasYElContenido($contenido);
        return App\ConstruirPieza::ensamblar( $piezasDeLaEtiqueta->unir( 
            $piezas , $atributosDeLaEtiqueta->crearAtributos(
                $atributos , 
                data_base_emulation_atributos() , 
                $cambiarNivel 
            ) 
        ) );
    }
}

if(!function_exists('body')) {
    function body($contenido = null,string $atributos = null , $cambiarNivel = false) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('body');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();

        //@@@@@@@#######@@@###@@##@##@@

        return es_cadena_de_atributos($contenido,$piezas,$atributosDeLaEtiqueta,$cambiarNivel);    

        //@@@@@@@#######@@@###@@##@##@@

    }
}

if(!function_exists('h1')) {
    function h1($contenido = null,string $atributos = null , $cambiarNivel = false) {
        $etiqueta = new App\QuieroCrearUnaEtiqueta('h1');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        $atributosDeLaEtiqueta = new App\CrearAtributosDeLaEtiqueta();

        //@@@@@@@#######@@@###@@##@##@@

        return es_cadena_de_atributos($contenido,$piezas,$atributosDeLaEtiqueta,$cambiarNivel);    

        //@@@@@@@#######@@@###@@##@##@@

    }
}

if(!function_exists('br')) {
    function br(){
        $etiqueta = new App\QuieroCrearUnaEtiqueta('br');
        $piezas = $etiqueta->listaDinamicaDeEtiquetasYpiezas(data_base_emulation());
        echo App\ConstruirPieza::ensamblar( $piezas );
    }
}