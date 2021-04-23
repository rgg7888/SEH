<?php

namespace App;

class IWantA {
    public function __construct( 
        private string $tag
    ){}

    public function setTag (string $tag) {
        $this->tag = $tag;
    }

    public function getTag () {
        return $this->tag;
    }

    public function iWantA () {
        switch ( $this->getTag() ) {
            case 'html': return ['<','html','attrs','>','content','</html>'];
            break;
            case 'head': return ['<','head','attrs','>','content','</head>'];
            break;
            case 'body': return ['<','body','attrs','>','content','</body>'];
            break;
        }
    }
}