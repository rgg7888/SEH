<?php

namespace App;

class Archivos {

    private string $script = "const getBtn = document.getElementById('get-btn');const getData = () => {const xhr = new XMLHttpRequest();xhr.open('GET','https://reqres.in/api/users');xhr.send();};getBtn.addEventListener('click',getData);";

    public function __construct(){}

    public function getScript() {
        return $this->script;
    }

    public function crearArchivo() {
        /*$myfile = fopen("newfile.js", "w") or die("Unable to open file!");
        fwrite($myfile, $this->getScript());
        fclose($myfile);*/
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }

}