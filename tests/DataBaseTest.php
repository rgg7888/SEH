<?php

use PHPUnit\Framework\TestCase;
use App\DataBase;

class DataBaseTest extends TestCase
{
/*
    public function test_create_a_dataBase_Mysqli_Connection()
    {
        $connection = new DataBase("localhost:81","root","","mysqli");

        $connection->connect();

        $this->assertEquals("Connected successfully", $connection->getMessage());

    }

    public function test_create_a_dataBase_pdo_Connection()
    {
        $connection = new DataBase("localhost:81","root","","pdo");

        $connection->connect("test");

        $this->assertEquals("Connected successfully", $connection->getMessage());

    }

    public function test_create_a_table_mysqli(){

        $createDb = new DataBase("localhost:81","root","","mysqli");

        $createDb->connect();

        $conexion = $createDb->getConexion();

        $createDb->createDb($conexion,"MyDb");

        $this->assertEquals("Database created successfully", $createDb->getMessage());

    }

    public function test_create_a_table_pdo(){

        $createDb = new DataBase("localhost:81","root","","pdo");

        $createDb->connect();

        $conexion = $createDb->getConexion();

        $createDb->createDb($conexion,"myDBPDO");

        $this->assertEquals("Database created successfully", $createDb->getMessage());

    }
    */

}