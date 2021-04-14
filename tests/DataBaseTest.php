<?php

use PHPUnit\Framework\TestCase;
use App\DataBase;

class DataBaseTest extends TestCase
{
    public function test_create_a_dataBase_Mysqli_Connection()
    {
        $connection = new DataBase("localhost","root","","mysqli");

        $connection->connect();

        $this->assertEquals("Connected successfully", $connection->getMessage());

    }

    public function test_create_a_dataBase_pdo_Connection()
    {
        $connection = new DataBase("localhost","root","","pdo");

        $connection->connect("test");

        $this->assertEquals("Connected successfully", $connection->getMessage());

    }
}