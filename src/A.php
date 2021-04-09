<?php

namespace App;

class A extends Base implements TagInterface {

    public function whatItIs(char|string $char){
        return match($char){
            "C" => "class=\"",
            "I" => "id=\"",
            "H" => "href=\""
        };
    }

    public function createOpenTag(array $attVal){
        $string = implode(" ",$attVal);
        return "<a ".$string.">";
    }

    public function createCloseTag(array|string|null $content){
        if(is_array($content)){
            $content = implode("",$content);
            return $this->getArgs().$content."</a>";
        }else{
            return $this->getArgs().$content."</a>";
        }
    }

    public function tag(string|null $attrib=null, string|array|null $func=null){

        $array=[];

        if($this->args === null){
            if($attrib !== null){
                $array = explode(" ", $attrib);
            }
        }else{
            $array = explode(" ", $this->getArgs());
        }

        $this->setArgs($this->createOpenTag($this->addAttrib($this->walkArray($array))));

        if($func === null){
            return $this->createCloseTag($this->getFunc());
        }else{
            return $this->createCloseTag($func);
        }

    }

    public function setContent(string|array $content){
        $this->setFunc($content);
    }

    public function getContent(){
        $this->getFunc();
    }

    public function setAttributes(string|array $attributes){
        $this->setArgs($attributes);
    }

    public function getAttributes(){
        $this->getArgs();
    }

}