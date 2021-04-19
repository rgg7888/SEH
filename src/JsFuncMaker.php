<?php

namespace App;

class JsFuncMaker {

    public function __construct(
        public string|null $func = null
    ){}
    
    public function setFunc(string $func){
        $this->func = $func;
    }

    public function getFunc(){
        return $this->func;
    }

    public function changeContent(string $id, string $fileName){
        return "var xhttp = new XMLHttpRequest();xhttp.onreadystatechange = function() {if (this.readyState == 4 && this.status == 200) {document.getElementById(\"".$id."\").innerHTML = this.responseText;}};xhttp.open(\"GET\", \"".$fileName."\", true);xhttp.send();";
    }

    public function httpObject(string $objectName){
        return "var ".$objectName." = new XMLHttpRequest();";
    }

    public function ors(string $objectName, string|array|null $functionContent = null ){
        $content = '';
        if(is_array($functionContent)){
            $content = implode("",$functionContent);
        }else{
            $content = $functionContent;
        }
        return $objectName.".onreadystatechange = function() {".$content."};";
    }

    public function si(string $conditions, string|array|null $siContent = null){

        $content = '';
        if(is_array($siContent)){
            $content = implode("",$siContent);
        }else{
            $content = $siContent;
        }
        return "if (".$conditions.") {".$content."}";

    }

    public function ihr(string $elementId){
        return "document.getElementById(\"".$elementId."\").innerHTML = this.responseText;";
    }

    public function abrir(string $objectName, string $method, string $fileName, string $x, string|null $args = null){

        return $objectName.".open(\"".$method."\", \"".$fileName."\"".$args.", ".$x.");";

    }

    public function enviar(string $objectName){
        return $objectName.".send();";
    }

    public function make(string $functionContent, string|array|null $args = null){
        $argumentos = '';
        if(is_array($args)){
            $argumentos = implode("",$args);
        }else{
            $argumentos = $args;
        }
        $content = '';
        if(is_array($functionContent)){
            $content = implode("",$functionContent);
        }else{
            $content = $functionContent;
        }
        return "function ".$this->getFunc()."(".$argumentos."){".$content."}";
    }
}