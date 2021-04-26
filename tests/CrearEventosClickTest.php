<?php

use PHPUnit\Framework\TestCase;
use App\CrearEventosClick;

class CrearEventosClickTest extends TestCase {

    /*lista de atributos
        1- numero de eventos click que queramos crear
        2- nombres de los botones
        3- ids de los botones
        4- nombres de las funciones
    */
    public function test_crear_eventos_click () {

        $eventosClick = new CrearEventosClick(2,['getBtn','postBtn'],['get-btn','post-btn'],['getData','sendData']);

        $this->assertEquals( "const getBtn = document.getElementById('get-btn');const getData = () => {0};getBtn.addEventListener('click',getData);const postBtn = document.getElementById('post-btn');const sendData = () => {1};postBtn.addEventListener('click',sendData);" , 
        $eventosClick->escribirScript());

    }

    public function test_peticion_get_simple_just_fetch_data_sin_nada_mas() {
        $eventosClick = new CrearEventosClick(1,['getBtn'],['get-btn'],['getData']);
        $this->assertEquals( "const getBtn = document.getElementById('get-btn');const getData = () => {const xhr = new XMLHttpRequest();xhr.open('GET','https://reqres.in/api/users');xhr.send();};getBtn.addEventListener('click',getData);" , 
        $eventosClick->obtenerDatosGetSuperSimple("https://reqres.in/api/users",$eventosClick->escribirScript()));
    }

}