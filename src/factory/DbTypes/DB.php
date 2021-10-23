<?php
namespace PhpDesignPattern\factory\DbTypes;

use PhpDesignPattern\factory\DbModel\AbstractDB;

abstract class DB
{
    abstract public function createDB():AbstractDB;

    public function useDB()
    {
        $db = $this->createDB();
        return $db->connectDB();
    }
}