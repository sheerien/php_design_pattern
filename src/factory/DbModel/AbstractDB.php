<?php 
namespace PhpDesignPattern\factory\DbModel;

abstract class AbstractDB
{
    abstract public function connectDB();
}