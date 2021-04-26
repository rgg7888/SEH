<?php

namespace App;

class Li extends Base implements TagInterface {

    public function createOpenTag(array $attVal){
        $string = implode(" ",$attVal);
        return "<li ".$string.">";
    }

    public function createCloseTag(array|string|null $content){
        if(is_array($content)){
            $content = implode("",$content);
            return $this->getArgs().$content."</li>";
        }else{
            return $this->getArgs().$content."</li>";
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