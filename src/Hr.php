<?php

namespace App;

class Hr extends Base implements TagInterface {

    public function createOpenTag(array $attVal){
        $string = implode(" ",$attVal);
        return "<hr ".$string."/>";
    }

    public function createCloseTag(array|string|null $content){
        //none, Not Necesario para las selfclosing tags
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
        return $this->getArgs();
        /* Not Necesario para las selfclosing tags
            if($func === null){
                return $this->createCloseTag($this->getFunc());
            }else{
                return $this->createCloseTag($func);
            }
        */
    }
    /* Not Necesario para las selfclosing tags
        public function setContent(string|array $content){
            $this->setFunc($content);
        }

        public function getContent(){
            $this->getFunc();
        }
    */
    public function setAttributes(string|array $attributes){
        $this->setArgs($attributes);
    }

    public function getAttributes(){
        $this->getArgs();
    }

}