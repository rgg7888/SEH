<?php

namespace App;

class Tags {

    public function __construct(
        public string|array|null $content = null,
        public string|null $args = null
    ){}

    

}