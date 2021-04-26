<?php

use PHPUnit\Framework\TestCase;
use App\Base;
use App\TagInterface;
use App\Article;

class ArticleTest extends TestCase
{
    public function test_create_a_article()
    {
        $article = new Article;

        $this->assertEquals("<article ></article>", $article->tag());

    }
}