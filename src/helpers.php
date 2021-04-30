<?php

//@@@###@@@### -> Utileria

if(!function_exists('conectar')) {
    function conectar() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=seh", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
}

if(!function_exists('data_base_emulation')) {
    function data_base_emulation($json = null) {
        if($json !== null) {
            return json_decode($json,true);
        }else{
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
}

if(!function_exists('data_base_emulation_atributos')) {
    function data_base_emulation_atributos($json = null) {
        if($json !== null) {
            return json_decode($json,true);
        }else{
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
}

//@@@###@@@### -> Etiquetas

    // ... coming soon =)