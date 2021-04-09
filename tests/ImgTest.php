<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Img;

class ImgTest extends TestCase
{
    public function test_create_a_img()
    {
        $img = new Img();

        $this->assertEquals("<img />", $img->tag());

        $img2 = new Img("Sphoto.jpg");

        $this->assertEquals("<img src=\"photo.jpg\"/>", $img2->tag());

        $img3 = new Img("Sphoto.jpg ADescription_replace_space_with_");

        $this->assertEquals("<img src=\"photo.jpg\" alt=\"Description_replace_space_with_\"/>", 
        $img3->tag());

        $img4 = new Img("W500 H600");

        $this->assertEquals("<img width=\"500\" height=\"600\"/>", $img4->tag());

    }
}