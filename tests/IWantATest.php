<?php

use PHPUnit\Framework\TestCase;
use App\IWantA;

class IWantATest extends TestCase {
    public function test_determinar_tag () {
        $tag = new IWantA ('html');
        $this->assertEquals( '<htmlattrs>content</html>' , implode( "" , $tag->iWantA() ) );
    }
}