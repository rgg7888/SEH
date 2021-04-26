<?php

namespace App;

class CrearEventosClick {

    private int $numeroDeEventos;
    private array $nombresDeLosBotones;
    private array $idsDeLosBotones;
    private array $nombresDeLasFunciones;

    public function __construct(int $num, array $botones, array $ids, array $funciones) {
        $this->numeroDeEventos = $num;
        $this->nombresDeLosBotones = $botones;
        $this->idsDeLosBotones = $ids;
        $this->nombresDeLasFunciones = $funciones;
    }

    public function crearEventos(int $num) {
        $this->numeroDeEventos = $num;
    }

    public function crearBotones(array $botones) {
        $this->nombresDeLosBotones = $botones;
    }

    public function crearIds(array $ids) {
        $this->idsDeLosBotones = $ids;
    }

    public function crearFunciones(array $funciones) {
        $this->nombresDeLasFunciones = $funciones;
    }

    public function obtenerEventos() {
        return $this->numeroDeEventos;
    }

    public function obtenerBotones() {
        return $this->nombresDeLosBotones;
    }

    public function obtenerIds() {
        return $this->idsDeLosBotones;
    }

    public function obtenerFunciones() {
        return $this->nombresDeLasFunciones;
    }

    public function obtenerDatosGetSuperSimple(string $url, string $script) {
        $numFunciones = $this->obtenerEventos();
        $peticion = "Const xhr = new XMLHttpRequest();xhr.open('GET'".","."'".$url."');xhr.send();";
        $js = '';
        for($i = 0; $i < $numFunciones; $i++) {
            $js = str_replace($i,$peticion,$script);
        }
        return $js;
    }

    public function escribirScript() {
        $script = [];
        $numeroDeEventos = $this->obtenerEventos();
        for($i = 0; $i < $numeroDeEventos; $i++) {
            array_push($script, "Const ".$this->obtenerBotones()[$i]." = document.getElementById('".$this->obtenerIds()[$i]."');" );
            array_push($script, "Const ".$this->obtenerFunciones()[$i]." = () => {".$i."};" );
            array_push($script, $this->obtenerBotones()[$i].".addEventListener('click',".$this->obtenerFunciones()[$i].");" );
        }
        return implode("",$script);
    }

}