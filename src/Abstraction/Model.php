<?php
namespace PhpDesignPattern\Abstraction;

class Model
{
    public function obg(DB $db)
    {
        return $db->dbConnect();
    }
}